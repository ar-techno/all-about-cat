<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori extends Model
{

    use SoftDeletes;
    public function jenisvendor()
    {
        return $this->belongsTo('App\jenisvendor');
    }
}
