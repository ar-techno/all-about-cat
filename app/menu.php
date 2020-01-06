<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    public function aksesmenu()
    {
    	return $this->hasMany('App\aksesmenu');
    }
    public function aksessubmenu()
    {
    	return $this->hasMany('App\aksesmenu');
    }
    public function jenisvendor()
    {
    	return $this->belongsTo('App\jenisvendor');
    }
    public function JoinToAksesMenu()
    {
        return $this->hasOne('App\aksesmenu','menu_id','id')->where('aksesmenus.akses_group_id',\Auth::User()->akses_group_id);
    }
    public function GetSubMenu($id)
    {
        return $this->where('parent_menu_id',$id)->where('tampil',1)->get();
    }
}
