<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiKoin extends Model
{
    //
    protected $table = 'transaksi_koin';
    protected $fillable = [
    'fk_id_endorser', 'nilai_koin_transaksi', 'tanggal', 'status'
    ];
}
