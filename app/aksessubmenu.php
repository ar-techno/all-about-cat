<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aksessubmenu extends Model
{
    public function menu()
    {
        return $this->belongsTo('App\menu');
    }

    public function akses_group()
    {
        return $this->belongsTo('App\akses_group');
    }
}
