<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'review';
    protected $fillable = [
        'mereview_id', 'direview_id', 'ulasan', 'rating'
    ];
}
