<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_verified_at', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function endorser()
    {
        if($this->type === 'endorser')
            return $this->hasOne('App\Endorser');
        else
            return NULL;
    }

    public function product_owner()
    {
        if($this->type === 'product owner')
            return $this->hasOne('App\ProductOwner');
        else
            return NULL;
    }
}
