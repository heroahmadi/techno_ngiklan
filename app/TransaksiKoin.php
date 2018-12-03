<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiKoin extends Model
{
    //
    protected $table = 'transaksi_koin';
    protected $fillable = [
        'endorser_id', 'nilai_koin_transaksi', 'status', 'coin_id'
    ];

    public function endorser()
    {
        return $this->belongsTo('App\Endorser');
    }

    public function coin()
    {
        return $this->belongsTo('App\Coin');
    }
}
