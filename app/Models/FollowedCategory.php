<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FollowedCategory extends Model
{
    protected $table = 'followed_category';
    public $timestamps = false;
    protected $fillable = [
    	'user_id',
    	'category_id'
    ];
}
