<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aksesmenu extends Model
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
