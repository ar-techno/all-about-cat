<?php

namespace App\Http\Controllers\backend;

use Auth;
use App\vendor;
use App\album as album_img;
use App\kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use File;

class Album extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id='')
    {
        $to64             = Crypt::decryptString($id);
        $id               = base64_decode(base64_decode($to64).base64_decode(date('ddmmY')).csrf_field());
        $vendor           = vendor::where([['jenisvendor_id',$id],['user_id',Auth::user()->id]])->
                                    select('id','jenisvendor_id','nama_toko')->
                                    first();
        $album            = album_img::where('vendor_id',$vendor->id)->whereNull('parent_id')->get();
        $data['album']    = $album;
        $data['info']     = $vendor;
        $data['kategori'] = kategori::where('jenisvendor_id',$vendor->jenisvendor_id)->get();
        return view('backend/album/album',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $input=[
                'vendor'        =>$request->input('vendor_id'),
                'nama_album'    =>$request->input('nama_album'),
                'title_gambar'  =>$request->input('title_gambar'),
                'keterangan'    =>$request->input('keterangan'),
                'gambar'        =>$request->file('gambar'),
            ];
            $rule=[
                'vendor'        =>'required',
                'nama_album'    =>'required',
                'title_gambar'  =>'required',
                'keterangan'    =>'required',
                'gambar'        =>'required',
            ];

            $v= $this->ValidasiData($input,$rule);
            if(!$v->fails()){
                if($request->file('gambar')) {
                    $lokasiL  = $_FILES['gambar']['tmp_name'];
                    $nm_fileL = rand(100,10000).time().'.'.$request->gambar->getClientOriginalExtension();

                    if(!file_exists(storage_path('images/vendor/'.$request->vendor_id))){
                        File::makeDirectory(storage_path('images/vendor/'.$request->vendor_id));
                    }

                    if(!file_exists(storage_path('images/vendor/'.$request->vendor_id.'/img-album/'))){
                        File::makeDirectory(storage_path('images/vendor/'.$request->vendor_id.'/img-album/'));
                    }
                    $upload = $request->gambar->move(storage_path('images/vendor/'.$request->vendor_id.'/img-album/'), $nm_fileL);

                    if ($upload) {
                        $s = new album_img;
                        $s->vendor_id       = $input['vendor'];
                        $s->nama_album      = $input['nama_album'];
                        $s->title           = $input['title_gambar'];
                        $s->keterangan      = $input['keterangan'];
                        $s->url_thumbnail   = $nm_fileL;

                        $data = $s->save() ? 1 : 0;
                    }
                    else{
                        $data = 0;
                    }
                }
                return $data;
            }
            else{
                return $v->errors()->first();
            }
        }
        else{
            return "Sorry, your action could not be processed";
        }
    }

    public function getEditAlbum($idAlbum)
    {
        return album_img::FindOrFail($idAlbum);
    }

    public function ImageList($id)
    {
        return album_img::where('parent_id',$id)->get();
    }

    public function allListGambar($id)
    {
        return album_img::where('vendor_id',$id)->whereNull('url_thumbnail')->get();
    }

    public function saveImages(Request $request)
    {
        if($request->isMethod('post')){
            $input=[
                'id_album'      =>$request->input('id'),
                'vendor'        =>$request->input('vendor_id'),
                'nama_gambar'   =>$request->input('nama_gambar'),
                'title_gambar'  =>$request->input('title_gambar'),
                'keterangan'    =>$request->input('keterangan'),
                'gambar'        =>$request->file('gambar'),
            ];
            $rule=[
                'id_album'      =>'required',
                'vendor'        =>'required',
                'nama_gambar'    =>'required',
                'title_gambar'  =>'required',
                'keterangan'    =>'required',
                'gambar'        =>'required',
            ];

            $v= $this->ValidasiData($input,$rule);
            if(!$v->fails()){
                foreach ($request->file('gambar') as $key => $value) {
                    $lokasiL  = $_FILES['gambar']['tmp_name'];
                    $nm_fileL = rand(100,10000).time().'.'.$value->getClientOriginalExtension();

                    if(!file_exists(storage_path('images/vendor/'.$request->vendor_id))){
                        File::makeDirectory(storage_path('images/vendor/'.$request->vendor_id));
                    }

                    if(!file_exists(storage_path('images/vendor/'.$request->vendor_id.'/img-album/'))){
                        File::makeDirectory(storage_path('images/vendor/'.$request->vendor_id.'/img-album/'));
                    }
                    $upload = $value->move(storage_path('images/vendor/'.$request->vendor_id.'/img-album/'), $nm_fileL);

                    if ($upload) {
                        $s = new album_img;
                        $s->nama_album      = '';
                        $s->vendor_id       = $input['vendor'];
                        $s->parent_id       = $input['id_album'];
                        $s->nama_gambar     = $input['nama_gambar'];
                        $s->title           = $input['title_gambar'];
                        $s->keterangan      = $input['keterangan'];
                        $s->url_gambar      = $nm_fileL;

                        $data = $s->save() ? 1 : 0;
                    }
                    else{
                        $data = 0;
                    }
                }
                return $data;
            }
            else{
                return $v->errors()->first();
            }
        }
        else{
            return "Sorry, your action could not be processed";
        }
    }

    public function updateJudulGambar(Request $request)
    {
        $d = album_img::FindOrFail($request->id);
        $d->nama_gambar = $request->judul;
        return $d->save() ? 1 : 0;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
        if($request->isMethod('post')){
            $input=[
                'id_album'      =>$request->input('id'),
                'vendor'        =>$request->input('vendor_id'),
                'nama_album'    =>$request->input('nama_album'),
                'title_gambar'  =>$request->input('title_gambar'),
                'keterangan'    =>$request->input('keterangan'),
            ];
            $rule=[
                'id_album'      =>'required',
                'vendor'        =>'required',
                'nama_album'    =>'required',
                'title_gambar'  =>'required',
                'keterangan'    =>'required',
            ];

            $v= $this->ValidasiData($input,$rule);
            if(!$v->fails()){
                if($request->file('gambar')) {
                    $lokasiL  = $_FILES['gambar']['tmp_name'];
                    $nm_fileL = rand(100,10000).time().'.'.$request->gambar->getClientOriginalExtension();

                    if(!file_exists(storage_path('images/vendor/'.$request->vendor_id))){
                        File::makeDirectory(storage_path('images/vendor/'.$request->vendor_id));
                    }

                    if(!file_exists(storage_path('images/vendor/'.$request->vendor_id.'/img-album/'))){
                        File::makeDirectory(storage_path('images/vendor/'.$request->vendor_id.'/img-album/'));
                    }
                    $upload = $request->gambar->move(storage_path('images/vendor/'.$request->vendor_id.'/img-album/'), $nm_fileL);

                    if ($upload) {
                        $s = album_img::FindOrFail($request->id);
                        $s->nama_album      = $input['nama_album'];
                        $s->vendor_id       = $input['vendor'];
                        $s->title           = $input['title_gambar'];
                        $s->keterangan      = $input['keterangan'];
                        $s->url_thumbnail   = $nm_fileL;

                        $data = $s->save() ? 1 : 0;
                    }
                    else{
                        $data = 0;
                    }
                }
                else{
                        $s = album_img::FindOrFail($request->id);
                        $s->nama_album      = $input['nama_album'];
                        $s->vendor_id       = $input['vendor'];
                        $s->title           = $input['title_gambar'];
                        $s->keterangan      = $input['keterangan'];
                        $data = $s->save() ? 1 : 0;
                }
                return $data;
            }
            else{
                return $v->errors()->first();
            }
        }
        else{
            return "Sorry, your action could not be processed";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = album_img::FindOrFail($id);
        $img   = album_img::where('parent_id',$id)->get();
        foreach ($img as $key => $value) {
            if (file_exists(storage_path('images/vendor/'.$value->vendor_id.'/img-album/'.$value->url_gambar))) {
                if(unlink(storage_path('images/vendor/'.$value->vendor_id.'/img-album/'.$value->url_gambar))){
                    $delImg   = album_img::FindOrFail($value->id)->delete();
                }
            }
        }

        if (file_exists(storage_path('images/vendor/'.$album->vendor_id.'/img-album/'.$album->url_thumbnail))) {
           unlink(storage_path('images/vendor/'.$album->vendor_id.'/img-album/'.$album->url_thumbnail));
        }
        
        return $album->delete() ? 1 : 0;
    }

    public function destroyGambar($id)
    {
        $img = album_img::FindOrFail($id);
            if (file_exists(storage_path('images/vendor/'.$img->vendor_id.'/img-album/'.$img->url_gambar))) {
                unlink(storage_path('images/vendor/'.$img->vendor_id.'/img-album/'.$img->url_gambar));
            }
        return $img->delete() ? 1 : 0;
    }
}
