<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class vendor extends Model
{
    use SoftDeletes;

    public function User()
    {
        return $this->belongsTo('App\User');
    }
    

    public function jenisvendor()
    {
        return $this->belongsTo('App\jenisvendor');
    }

    public function layanan()
    {
        return $this->belongsTo('App\layanan');
    }
    public function getLayananVendor($idVendor='')
    {
        return vendor::join('layanans','layanans.id','vendors.layanan_id')
                            ->whereNull('layanans.deleted_at')
                            ->whereNull('vendors.deleted_at')
                            ->where('parent_id',$idVendor)
                            ->select('vendors.id as id','vendors.status','layanans.nama_layanan')
                            ->get();

    }
}
