<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use Notifiable;

    protected string $guard = 'customer';

    protected $guarded = ['id'];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
