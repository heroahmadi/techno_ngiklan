<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $table = 'produk';
    protected $fillable = [
    'nama_produk', 'gambar', 'deskripsi', 'status'
    ];

    public function product_owner()
    {
        return $this->belongsTo('App\ProductOwner');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }


    public function getNamaAttribute()
    {
        return $this->nama_produk;
    }
}
