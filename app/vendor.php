<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }
    public function jenisvendor()
    {
        return $this->belongsTo('App\jenisvendor');
    }
}
