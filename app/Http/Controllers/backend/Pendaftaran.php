<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Validator;
use App\vendor as new_pendaftar;
use App\akses_group;
use App\harikerja;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pendaftaran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p = new_pendaftar::whereNull('parent_id')->get();
        foreach ($p as $key) {
            $d[] = $key;
            $j = new_pendaftar::where('parent_id',$key->id)->get();
        }
        $ag = akses_group::where('alias','!=','ROOT')->get();

        $data['akses_group'] = $ag;
        $data['pendaftar'] = $d;
        $data['vendor'] =$j;
        return view('backend/pendaftaran/pendaftaran',$data);
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
    public function edit($id)
    {
        $d = new_pendaftar::find($id);
        $data['id']             = $d->id;
        $data['nama_pemilik']   = $d->User->name;
        $data['alamat']         = $d->alamat;
        $data['tgl_daftar']     = $d->tgl_daftar;
        $data['nama_toko']      = $d->nama_toko;
        $data['kode_vendor']    = is_null($d->parent_id) ? '' : $d->jenisvendor->kode;
        $data['jenis_vendor']   = is_null($d->parent_id) ? '' : $d->jenisvendor->nama_vendor;
        $data['akses_group']    = $d->User->akses_group_id;
        $data['no_telp']        = $d->hp;
        $data['no_hp']          = $d->telp;
        $data['email']          = $d->User->email;
        $data['instagram']      = $d->instagram;
        $data['alamat_toko']    = $d->alamat;
        $data['status']         = $d->status;
        $data['izin_usaha']     = $d->izin_usaha;
        $data['nid']            = $d->nid;
        return $data;
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
                'req status'=>$request->input('status'),
            ];
            $rule=[
                'req status'=>'required|max:50',
            ];
            $v=Validator::make($input,$rule);
            if(!$v->fails()){
                $d = new_pendaftar::find($request->id);
                $d->status = $input['req status'];

                    $cekHK = harikerja::where('vendor_id',$request->id)->first();
                    if (empty($cekHK)) {
                        for ($i=1; $i <= 7 ; $i++) { 
                            $hk = new harikerja;
                            $hk->vendor_id = $request->id;
                            $hk->dari = '07:00:00';
                            $hk->sampai = '17:00:00';
                            $hk->keterangan = 'Buka';
                            $hk->hari = $i;
                            $hk->status = 1;
                            $hk->save();
                        }
                    }
                    
                    if (!empty($request->akses_group)) {

                        $g = User::find($d->user_id);
                        $g->akses_group_id = $request->akses_group;
                        $g->save();
                    }

                return $d->save() ? 1 : 0;
            }
            else
            {
                return 0;
            }
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
        //
    }
}
