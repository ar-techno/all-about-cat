<?php

namespace App\Http\Controllers\backend;
use App\menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Menus extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = menu::where('parent_menu_id',null)->where('parent_submenu_id',null)->where('tampil',1)->get();
        $data['data'] = $menu;
        return view('backend/menu/menu',$data);
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
        $menu = new menu;
        $menu->nama = $request->nama_menu;
        $menu->link = $request->link;
        $menu->icon = $request->icon_menu;
        $menu->status = $request->tampil;
        // $menu->tampil = $request->name;
        if (!empty($request->group_menu)) {
            $menu->parent_menu_id = $request->group_menu;
        }
        if (!empty($request->main_menu)) {
            $menu->parent_submenu_id = $request->main_menu;
        }

        $data = $menu->save() ? 1 : 0;
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return menu::where('id',$id)->first();
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
        $menu=menu::find($request->id);
        $menu->nama = $request->nama_menu;
        $menu->link = $request->link;
        $menu->icon = $request->icon_menu;
        $menu->tampil = $request->tampil;
        // $menu->tampil = $request->name;
        if (!empty($request->group_menu)) {
            $menu->parent_menu_id = $request->group_menu;
        }
        if (!empty($request->main_menu)) {
            $menu->parent_submenu_id = $request->main_menu;
        }

        $data = $menu->save() ? 1 : 0;
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

    function updateStruktur(Request $req)
    {
        if($req->isMethod('post')){
            $update = $this->loopUpdateMenu(json_decode($req->input('output-list')));
        }
        return  $update ? 1 : 0;

    }
    function loopUpdateMenu($menu,$parent='')
    {
        $posisi=1;
        $check=true;
        foreach($menu as $dt)
        {
            $m=menu::findOrFail($dt->id);
            $m->posisi=$posisi;
            if(!empty($parent))
            {
                $m->parent_menu_id=$parent;
            }
            else
            {
                $m->parent_menu_id=null;
            }
            if($m->save()){
                if(isset($dt->children) && count($dt->children) > 0 )
                {
                    $this->loopUpdateMenu($dt->children,$dt->id);
                }
                $posisi++;
            }else{
                $check=true;
                break;
            }
        }
        return $check;

    }
}
