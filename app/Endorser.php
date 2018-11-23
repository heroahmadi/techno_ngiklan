<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endorser extends Model
{
    //
    protected $table = 'endorser';
    protected $fillable = [
    'nama_endorser', 'tempat_lahir', 'tgl_lahir', 'gender', 'jumlah_koin'
    ];
}
