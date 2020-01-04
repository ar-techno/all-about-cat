<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class jenisvendor extends Model
{
    use SoftDeletes;
    public function menu()
    {
        return $this->belongsTo('App\menu');
    }

}