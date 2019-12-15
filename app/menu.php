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
    
}
