<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSignUp extends Model
{
    const LAST_LOGIN = 'last_time_login';
    protected $table = 'user';
    protected $fillable = [
    	'username',
    	'login_name',
    	'password',
    	'email',
    	'date_of_birth',
    	'gender',
        'role_id',
    ];
}
