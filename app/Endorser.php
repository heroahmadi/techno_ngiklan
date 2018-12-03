<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Uuid;

class Endorser extends Model
{
    //
    protected $table = 'endorser';
    protected $fillable = [
     'id', 'nama_endorser', 'tempat_lahir', 'tgl_lahir', 'gender', 'jumlah_koin', 'user_id'
    ];
    public $incrementing = false;

    public function transaksi_koin()
    {
        return $this->hasMany('App\TransaksiKoin');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function sosmed()
    {
        return $this->hasMany('App\Sosmed');
    }

    public function kategori_endorser()
    {
        return $this->hasMany('App\KategoriEndorser');
    }

    public function paket_endorse()
    {
        return $this->hasMany('App\PaketEndorse');
    }

    public function transaksi()
    {
        return $this->hasMany('App\TransaksiEndorse');
    }

    public function direview()
    {
        return $this->hasMany('App\Review', 'direview_id');
    }


    public function getNamaAttribute()
    {
        return $this->nama_endorser;
    }
}
