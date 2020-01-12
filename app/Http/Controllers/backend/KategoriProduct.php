<?php

namespace App\Http\Controllers\backend;

use App\kategori;
use App\jenisvendor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data['data'] = kategori::paginate(10);
        $data['vendor'] = jenisvendor::all();
        return view('backend/kategori/kategori',$data);
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
                'nm_kategori'=>$request->input('nm_kategori'),
                'jenisvendor_id'=>$request->input('jenisvendor_id'),
            ];
            $rule=[
                'nm_kategori'=>'required|max:50',
                'jenisvendor_id'=>'required',
            ];
            $v=$this->ValidasiData($input,$rule);
            if(!$v->fails()){
                    $s = new kategori;
                    $s->nama_kategori = $input['nm_kategori'];
                    $s->jenisvendor_id = $input['jenisvendor_id'];
                    $s->save();
                return $s ? 1 : 0;
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
    public function update(Request $request)
    {
        if($request->isMethod('post')){
            $input=['nm_kategori'=>$request->input('nm_kategori'),
                    'jenisvendor_id'=>$request->input('jenisvendor_id')];
            $rule =['nm_kategori'=>'required|max:100',
                    'jenisvendor_id'=>'required'];

            $v=$this->ValidasiData($input,$rule);
            if(!$v->fails()){
                    $s = kategori::find($request->id);
                    $s->nama_kategori = $input['nm_kategori'];
                    $s->jenisvendor_id = $input['jenisvendor_id'];
                    $s->save();
                return $s ? 1 : 0;
            }
            else{
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
        $d = kategori::find($id);
        return $d->delete() ? 1 : 0;
    }
}
