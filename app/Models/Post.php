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
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function post_tag()
    {
        return $this->hasMany(PostTag::class);   
    }
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    public function getSomeDateAttribute($date)
    {
        return $date->format('m-d');
    }
}
