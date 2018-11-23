<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriEndorser extends Model
{
    protected $table = 'kategori_endorser';
    
    public function endorser()
    {
        return $this->belongsTo('App\Endorser');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }
}
