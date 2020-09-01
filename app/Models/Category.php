<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	const UPDATED_AT = null;
    protected $table = 'category';
    protected $fillable = [
    	'name',
    	'description',
    	'created_by',
    	'topic_id'
    ];
    public function post()
    {
        return $this->hasMany(Post::class);
    }
    public function topic()
    {
    	return $this->belongsTo('App\Models\Topic','topic_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','created_by');
    }
}
