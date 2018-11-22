<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOwner extends Model
{
    //
    protected $table = 'product_owner';
    protected $fillable = [
    'nama_owner', 'alamat'
    ];
}
