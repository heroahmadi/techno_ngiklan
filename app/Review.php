<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'review';
    protected $fillable = [
    'reviewer', 'yang_direview', 'ulasan', 'rating'
    ];
}
