<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaketEndorse extends Model
{
    //
    protected $table = 'paket_endorse';
    protected $fillable = [
    'nama_paket', 'deskripsi', 'harga'
    ];

    public function endorser()
    {
        return $this->belongsTo('App\Endorser');
    }
}
