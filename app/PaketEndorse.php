<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaketEndorse extends Model
{
    //
    protected $table = 'pakt_endorse';
    protected $fillable = [
    'nama_paket', 'deskripsi', 'harga'
    ];
}
