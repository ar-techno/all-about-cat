<?php

namespace App\Http\Controllers\backend;

use Auth;
use App\vendor;
use App\product;
use App\kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Produk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id='')
    {
        $id               = base64_decode(base64_decode($id).base64_decode(date('ddmmY')).csrf_field());
        $vendor           = vendor::where([['jenisvendor_id',$id],['user_id',Auth::user()->id]])->
                                    select('id','jenisvendor_id','nama_toko')->
                                    first();
        $data['data']     = product::where('vendor_id',$vendor->id)->whereNull('product_parent_id')->whereNull('deleted_at')->paginate(10);
        $data['info']     = $vendor;
        $data['kategori'] = kategori::where('jenisvendor_id',$vendor->jenisvendor_id)->get();
        return view("backend/produk/produk",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $input=[
                'vendor_id'   =>$request->input('vendor_id'),
                'nama_produk' =>$request->input('nama_produk'),
                'keterangan'  =>$request->input('keterangan'),
                'stok'        =>$request->input('stok'),
                'harga'       =>$request->input('harga'),
                'kategori_id' =>$request->input('kategori_id'),
                'tgl_berdiri' =>$request->input('tgl_berdiri'),
            ];
            $rule=[
                'vendor_id'   =>'required',
                'nama_produk' =>'required|max:200',
                'keterangan'  =>'required|max:1000',
                'stok'        =>'required',
                'harga'       =>'required',
                'kategori_id' =>'required',
                'tgl_berdiri' =>'required',
            ];
            $v=Validator::make($input,$rule);
            if(!$v->fails()){
                    $s = new product;
                    $s->kode_produk = rand();
                    $s->vendor_id = $input['vendor_id'];
                    $s->kategori_id = $input['kategori_id'];
                    $s->nama_product = $input['nama_produk'];
                    $s->keterangan = $input['keterangan'];
                    $s->harga = $input['harga'];
                    $s->stock = $input['stok'];
                    $s->tgl_kadaluarsa = $input['tgl_berdiri'];
                return $s->save() ? 1 : 0;
            }
            else{
                return 0;
            }
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
