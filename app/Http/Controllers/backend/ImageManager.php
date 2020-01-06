<?php

namespace App\Http\Controllers\backend;

use Auth;
use File;
use App\layanan;
use App\vendor;
use App\product;
use App\menu;
use App\aksesmenu as akses_menu;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageManager extends Controller
{
	// start image manager to vendor
	    public function ImageSaveToVendor(Request $request)
	    {
	    	$dt = vendor::find($request->id);
	        $logoT = $dt->logo_toko;

	    	if ($request->file('logo')) {
	            if (file_exists(storage_path('images/vendor/'.$request->id.'/img-logo/'.$logoT))) {
	                unlink(storage_path('images/vendor/'.$request->id.'/img-logo/'.$logoT));
	            }

	            $lokasiL  = $_FILES['logo']['tmp_name'];
	            $nm_fileL = rand(100,10000).time().'.'.$request->logo->getClientOriginalExtension();

	            if(!file_exists(storage_path('images/vendor/'.$request->id))){
	                File::makeDirectory(storage_path('images/vendor/'.$request->id));
	            }

	            if(!file_exists(storage_path('images/vendor/'.$request->id.'/img-logo/'))){
	                File::makeDirectory(storage_path('images/vendor/'.$request->id.'/img-logo/'));
	            }

	            move_uploaded_file($lokasiL, storage_path('images/vendor/'.$request->id.'/img-logo/'.$nm_fileL));

	        }
	        $dt->logo_toko = $nm_fileL;
	        return $dt->save() ? 1 : 0;
	    }

	    public function ImageSaveToProduk(Request $request)
	    {
	        foreach ($request->file('gambar') as $key => $value) {
	            $lokasiL  = $_FILES['gambar']['tmp_name'];
	            $nm_fileL = rand(100,10000).time().'.'.$value->getClientOriginalExtension();

	            if(!file_exists(storage_path('images/vendor/'.$request->vendor_id))){
	                File::makeDirectory(storage_path('images/vendor/'.$request->vendor_id));
	            }

	            if(!file_exists(storage_path('images/vendor/'.$request->vendor_id.'/img-produk/'))){
	                File::makeDirectory(storage_path('images/vendor/'.$request->vendor_id.'/img-produk/'));
	            }

	            if(!file_exists(storage_path('images/vendor/'.$request->vendor_id.'/img-produk/'.$request->id))){
	                File::makeDirectory(storage_path('images/vendor/'.$request->vendor_id.'/img-produk/'.$request->id));
	            }
	            
	            $upload = $value->move(storage_path('images/vendor/'.$request->vendor_id.'/img-produk/'.$request->id), $nm_fileL);

	            if ($upload) {
	                $s = new product;
	                $s->vendor_id = $request->vendor_id;
	                $s->nama_product      = '-';
	                $s->product_parent_id = $request->id;
	                $s->gambar            = $nm_fileL;
	                $s->title_gambar      = $request->title_image[$key];

	                $data = $s->save() ? 1 : 0;
	            }
	            else{
	                $data = 0;
	            }
	        }
	        return $data;

	    }
    // end image manager in vendor

    // start image manager to produk
	    public function ImageListProduk($idProduk='')
	    {
	        $getData = product::where('product_parent_id',$idProduk)->get();
	        return $getData;
	    }

	    public function DeletedImagesProduk($idProduk='')
	    {
	        $CekData = product::findOrFail($idProduk);
	        if ($CekData) {
	            if(file_exists(storage_path('images/vendor/'.$CekData->vendor_id.'/img-produk/'.$CekData->product_parent_id.'/'.$CekData->gambar))){
	                if (unlink(storage_path('images/vendor/'.$CekData->vendor_id.'/img-produk/'.$CekData->product_parent_id.'/'.$CekData->gambar))) {
	                    $response = $CekData->delete() ? 1 : 0;
	                }
	                else{
	                    $response = 0;
	                }
	            }
	        }
	        return $response;
	    }

	    public function EditImagesProduk(Request $request)
	    {
	        $GetData = product::findOrFail($request->id);
	        $GetData->title_gambar = $request->title;
	        return $GetData->save() ? 1 : 0;
	    }
	// end image manager in produk
}
