<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function getCreatedAtAttribute($val)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $val, 'Asia/Jakarta');
    }
}
