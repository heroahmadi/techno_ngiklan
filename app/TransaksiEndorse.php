<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiEndorse extends Model
{
    //
    protected $table = 'transaksi_endorse';
    protected $fillable = [
    'fk_id_endorser', 'fk_product_owner', 'nilai_transaksi', 'status'
    ];
}
