<?php

namespace App\Http\Controllers\backend;

use App\jenisvendor as jenis_vendor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;
class JenisVendor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend/jenis-vendor/jenis-vendor');
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
                'kd_vendor'=>$request->input('kd_vendor'),
                'nm_vendor'=>$request->input('nm_vendor'),
            ];
            $rule=[
                'kd_vendor'=>'required|max:50',
                'nm_vendor'=>'required|max:50',
            ];
            $v=Validator::make($input,$rule);
            if(!$v->fails()){
                    $s = new jenis_vendor;
                    $s->kode = $input['kd_vendor'];
                    $s->nama_vendor = $input['nm_vendor'];
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
        $data = jenis_vendor::whereNull('deleted_at')->get();
        $DataTables = Datatables()->of($data)
        ->addColumn('action',function($e)
        {  
            return ' <a href="#" onclick="editVendor('.$e->id.')" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                <a href="#" onclick="confirmVendor('.$e->id.')" class="btn btn-danger btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>';
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
        return jenis_vendor::find($id);
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
        $v = jenis_vendor::find($request->id);
        $v->kode        = $request->kd_vendor;
        $v->nama_vendor = $request->nm_vendor;
        return $v->save() ? 1 : 0;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return jenis_vendor::find($id)->delete() ? 1 : 0;
    }
}
