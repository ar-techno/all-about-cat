<?php

namespace App\Http\Controllers;

use Auth;
use File;
use App\layanan;
use App\vendor;
use App\product;
use App\menu;
use App\aksesmenu as akses_menu;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        View::share('menu', menu::orderBy('posisi','asc')->whereNull('parent_menu_id')->get());
    }

    public function ValidasiData($input,$rule)
    {
        $messages = [
                      'required'=> 'Data :attribute Tidak Boleh Kosong',
                      'string'  => 'Data :attribute Harus Dalam Bentuk Text',
                      'file'    => 'Data :attribute Harus Dalam Bentuk File',
                      'mimes'   => 'Supported file format for :attribute are :mimes',
                      'max'     => 'The :attribute must have a maximum length of :max',
                    ];
        return Validator::make($input,$rule,$messages);
    }

    public function LayananShow($id='')
    {
    	$data = layanan::whereNull('deleted_at')->get(); 
    	return  response()->json($data);
    }

    public function LayananVendor($id='')
    {
    	$v = vendor::where('id',$id)->select('layanan_id','harga_layanan','catatan_layanan','status')->first();
    	$data['vendor'] = $v;
    	$data['layanan'] = layanan::find($v->layanan_id);
    	return $data;
    }
    public function LayananAdd(Request $request)
    {
    	if($request->isMethod('post')){
        	$v = new vendor;
        	$v->jenisvendor_id = $request->jenis_vendor_id;
        	$v->layanan_id = $request->layanan_id;
        	$v->nama_toko = '-';
        	$v->harga_layanan = $request->harga;
        	$v->catatan_layanan = $request->keterangan;
        	$v->parent_id = $request->id;
        	$v->status = $request->statusLayanan;
    	}
    	return $v->save() ? 1 : 0;
    }
    public function LayananVendorEdit(Request $request)
    {
    	if($request->isMethod('post')){
        	$v = vendor::find($request->id);
        	$v->harga_layanan = $request->harga;
        	$v->catatan_layanan = $request->keterangan;
        	$v->status = $request->statusLayanan;
    	    	if ($request->statusLayanan == 99) {
        			return $v->delete() ? 1 : 0;
    	    	}
    	}
		return $v->save() ? 1 : 0;
    }
}
