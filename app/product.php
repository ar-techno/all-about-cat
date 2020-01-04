<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function kategori()
    {
        return $this->belongsTo('App\kategori');
    }
}
