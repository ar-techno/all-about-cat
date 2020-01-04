<?php

namespace App\Http\Controllers\backend;

use Auth;
use App\vendor;
use App\harikerja;
use App\User;
use App\testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreInformation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id='')
    {   

        $id      = base64_decode(base64_decode($id).base64_decode(date('ddmmY')).csrf_field());
        $d       = vendor::where([['jenisvendor_id',$id],['user_id',Auth::user()->id]])->first();
        $waktu   = harikerja::where('vendor_id',$d->id)->get();
        $testimo = testimonial::where('vendor_id',$d->id)->paginate(10);
        $GLV     = new vendor;
        $layanan = $GLV->getLayananVendor($d->id);

        $data['waktu']  =$waktu;
        $data['data']   =$d;
        $data['img']    =$d->id.'/'.$d->logo_toko;
        $data['layanan']=$layanan;
        $data['testimo']=$testimo;

        return view('backend/store/store',$data);
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
        $v = vendor::find($id);
        $data['vendor_id'] = $v->id;
        $data['nama_toko'] = $v->nama_toko;
        $data['jenis_vendor'] = $v->jenisvendor->nama_vendor;
        $data['no_telp'] = $v->telp;
        $data['no_hp'] = $v->hp;
        $data['email'] = $v->User->email;
        $data['instagram'] = $v->instagram;
        $data['slogan'] = $v->slogan;
        $data['tentang_toko'] = $v->tentang;
        $data['alamat_toko'] = $v->alamat;
        $data['lat'] = $v->latitude;
        $data['lng'] = $v->longitude;

        return $data;
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
            $v=vendor::find($request->vendor_id);
            $v->nama_toko = $request->nama_toko;
            $v->telp = $request->no_telp;
            $v->hp = $request->no_hp;

            $v->instagram = $request->instagram;
            $v->slogan = $request->slogan;
            $v->tentang = $request->tentang_toko;
            $v->alamat = $request->alamat_toko;
            $v->latitude = $request->lat;
            $v->longitude = $request->lng;
            if (!empty($request->email)) {
                $user = user::find($v->user_id);
                $user->email = $request->email;
                $user->save();
            }
            $data = $v->save() ? 1 : 0;
        }

        return $data;    
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
