<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
    //
    protected $table = 'sosmed';
    protected $fillable = [
    'link_sosmed', 'type'
    ];
}
