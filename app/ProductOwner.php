<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Uuid;

class ProductOwner extends Model
{
    //
    protected $table = 'product_owner';
    protected $fillable = [
     'id', 'nama_owner', 'alamat', 'user_id'
    ];
    public $incrementing = false;

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function produk()
    {
        return $this->hasOne('App\Produk');
    }

    public function transaksi()
    {
        return $this->hasMany('App\TransaksiEndorse');
    }

    public function mereview()
    {
        return $this->hasMany('App\Review', 'mereview_id');
    }

    public function direview()
    {
        return $this->hasMany('App\Review', 'direview_id');
    }
}
