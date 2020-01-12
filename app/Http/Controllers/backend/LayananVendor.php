<?php

namespace App\Http\Controllers\backend;

use App\layanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananVendor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
                'nm_layanan'=>$request->input('nm_layanan'),
            ];
            $rule=[
                'nm_layanan'=>'required|max:50',
            ];
            $v=$this->ValidasiData($input,$rule);
            if(!$v->fails()){
                    $s = new layanan;
                    $s->nama_layanan = $input['nm_layanan'];
                    $s->save();
                return $s ? 1 : 0;
            }
            else
            {
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
    public function show()
    {
        $data = layanan::whereNull('deleted_at')->get();
        $DataTables = Datatables()->of($data)
        ->addColumn('action',function($e)
        {  
            return ' <a href="#" onclick="editLayanan('.$e->id.')" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                <a href="#" onclick="confirmLayanan('.$e->id.')" class="btn btn-danger btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>';
        })
        ->rawColumns(['action'])
        ->make(true);
        return $DataTables;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return layanan::find($id);
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
        $l = layanan::find($request->id);
        $l->nama_layanan = $request->nm_layanan;
        return $l->save() ? 1 : 0;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan = layanan::find($id);
        return $layanan->delete() ? 1 : 0;
    }
}
