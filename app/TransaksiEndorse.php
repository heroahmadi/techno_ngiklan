<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiEndorse extends Model
{
    //
    protected $table = 'transaksi_endorse';
    protected $fillable = [
        'endorser_id', 'product_owner_id', 'nilai_transaksi', 'status'
    ];

    public function endorser()
    {
        return $this->belongsTo('App\Endorser');
    }

    public function product_owner()
    {
        return $this->belongsTo('App\ProductOwner');
    }
}
