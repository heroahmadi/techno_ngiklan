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

    public function mereviewObj()
    {
        $obj = $this->belongsTo('App\ProductOwner', 'mereview_id', 'id');
        if(!$obj)
            $obj = $this->belongsTo('App\Endorser', 'mereview_id', 'id');
        // dd($obj);
        return $obj;
    }
}
