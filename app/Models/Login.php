<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;

class Login extends Authenticate
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
    ];
}
