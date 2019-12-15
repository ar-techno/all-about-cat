<?php

namespace App\Http\Controllers\backend;

use App\perusahaan;
use File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IdentitasPerusahaan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idtt = perusahaan::all()->first();
        $data = $idtt;

        return view('backend/identitas-perusahaan/identitas',$data);
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
    public function edit(Request $req)
    {
        $dt = perusahaan::where('id',$req->id)->first();
        $logoP = $dt->logo;
        $logoF = $dt->favicon;

        if ($req->file('logo')) {
            if (file_exists(storage_path('images/perusahaan/img-logo/'.$logoP))) {
                unlink(storage_path('images/perusahaan/img-logo/'.$logoP));
            }
            $lokasiL  = $_FILES['logo']['tmp_name'];
            $nm_fileL = rand(100,10000).time().'.'.$req->logo->getClientOriginalExtension();
            move_uploaded_file($lokasiL, storage_path('images/perusahaan/img-logo/'.$nm_fileL));
            $logoP = $nm_fileL;
        }

        if ($req->file('favicon')) {
            if (file_exists(storage_path('images/perusahaan/img-logo/'.$logoF))) {
                unlink(storage_path('images/perusahaan/img-logo/'.$logoF));
            }
            $lokasiF  = $_FILES['favicon']['tmp_name'];
            $nm_fileF = rand(100,10000).time().'.'.$req->favicon->getClientOriginalExtension();
            move_uploaded_file($lokasiF, storage_path('images/perusahaan/img-logo/'.$nm_fileF));
            $logoF = $nm_fileF;
        }


        $update = perusahaan::where('id',$req->id)
                            ->update(['nama_perusahaan'=>$req->nama_perusahaan,
                                      'email'=>$req->email,
                                      'telp'=>$req->telp,
                                      'instagram'=>$req->instagram,
                                      'twitter'=>$req->twitter,
                                      'website'=>$req->alamat_website,
                                      'slogan'=>$req->slogan,
                                      'logo'=>$logoP,
                                      'favicon'=>$logoF,
                                      'tentang'=>$req->tentang_perusahaan,
                                      'alamat'=>$req->alamat_perusahaan,
                                      'tgl_launcing'=>$req->tgl_berdiri]);

        $data = $update ? 1 : 0;
        return  $data ;
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
