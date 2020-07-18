<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = [
    	'title',
    	'content',
    	'created_by',
    	'category_id',
    	'status',
    	'upvote',
    	'downvote',
    	'deleted_at'
    ];
    public function category()
    {
    	return $this->belongsTo('App\Models\Category','category_id');
    }
    public function user()
    {
    	return $this->belongsTo('App\Models\User','created_by');
    }
}