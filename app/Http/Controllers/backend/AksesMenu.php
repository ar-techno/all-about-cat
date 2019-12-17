<?php

namespace App\Http\Controllers\backend;

use Auth;
use App\menu;
use App\User;
use App\akses_group;
use App\aksesmenu as akses_menu;
use App\aksessubmenu;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AksesMenu extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $menu  = menu::where([['parent_menu_id',null],['parent_submenu_id',null],['tampil',1]])->get();
        // $aksessubmenu_detail  = aksessubmenu::select('menu_id');
        $submenu = DB::table('menus as t1')
                ->join('menus AS t2', 't2.parent_menu_id', '=', 't1.id')
                // ->whereNotIn('t2.id',$aksessubmenu_detail)
                ->select('t1.id as id_parent','t1.nama as nama_parent',
                          't2.id as id_child','t2.nama as nama_child')
                ->orderBy('id_parent','asc')
                ->get();
        $akses = akses_group::all();
        $aksesmenu = akses_menu::paginate(10);
        $aksessubmenu = aksessubmenu::paginate(10);
        $data['menu']     = $menu;
        $data['akses']    = $akses;
        $data['submenu']  = $submenu;
        $data['mainmenu'] = $aksesmenu;
        $data['submenus'] = $aksessubmenu;

        return view('backend/akses-menu/akses-menu',$data);
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
                'Nama Menu'=>$request->input('menu_id'),
                'Hak Akses'=>$request->input('akses_group_id'),
            ];
            $rule=[
                'Nama Menu'=>'required|max:50',
                'Hak Akses'=>'required',
            ];
            $v=Validator::make($input,$rule);
            if(!$v->fails()){
                foreach ($input['Nama Menu'] as $key) {
                    $menu = new akses_menu;
                    $menu->menu_id = $key;
                    $menu->akses_group_id = $input['Hak Akses'];
                    $menu->save();
                }
                return $menu ? 1 : 0;
            }
            else
            {
                return 0;
            }
        }
    }

    public function store_submenu(Request $request)
    {
        if($request->isMethod('post')){
            $input=[
                'Nama Menu'=>$request->input('submenu_id'),
                'Hak Akses'=>$request->input('akses_group_id'),
            ];
            $rule=[
                'Nama Menu'=>'required|max:50',
                'Hak Akses'=>'required',
            ];
            $v=Validator::make($input,$rule);
            if(!$v->fails()){
                foreach ($input['Nama Menu'] as $key) {
                    $menu = new aksessubmenu;
                    $menu->menu_id = $key;
                    $menu->akses_group_id = $input['Hak Akses'];
                    $menu->save();
                }
                return $menu ? 1 : 0;
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
    public function show($id)
    {
        return akses_menu::find($id);
    }

    public function showSubmenu($id)
    {
        return aksessubmenu::find($id);
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

    public function edit_submenu($id)
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
        $aksesmenu = akses_menu::find($request->id);
        $aksesmenu->menu_id = $request->menu_id;
        $aksesmenu->akses_group_id = $request->akses_group_id[0];
        return $aksesmenu->save() ? 1 : 0;
    }

    public function updateSubmenu(Request $request)
    {
        $aksesmenu = aksessubmenu::find($request->id);
        $aksesmenu->menu_id = $request->submenu_id;
        $aksesmenu->akses_group_id = $request->akses_group_id[0];
        return $aksesmenu->save() ? 1 : 0;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aksesmenu = akses_menu::find($id);
        return $aksesmenu->delete() ? 1 : 0;
    }
    public function destroySubmenu($id)
    {
        $aksesmenu = aksessubmenu::find($id);
        return $aksesmenu->delete() ? 1 : 0;
    }
}
