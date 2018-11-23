<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $table = 'produk';
    protected $table = [
    'nama_produk', 'gambar', 'deskripsi', 'status'
    ];
}
