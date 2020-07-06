<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = [
    	'username',
    	'login_name',
    	'password',
    	'email',
    	'date_of_birth',
    	'biography',
    	'picture',
    	'gender',
    	'role_id'
    ];
    public function role()
    {
    	return $this->belongsTo('App\Models\Role','role_id');
    }
}
