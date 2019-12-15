<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akses_group extends Model
{
    public function User()
    {
        return $this->hasOne('App\User');
    }

    public function aksesmenu()
    {
    	return $this->hasMany('App\aksesmenu');
    }

    public function aksessubmenu()
    {
        return $this->hasMany('App\Aksessubmenu');
    }
}
