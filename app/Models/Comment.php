<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";
    protected $fillable = [
    	'content',
    	'post_id',
    	'created_by',
    	'status',
    	'deleted_at'
    ];
    public function post()
    {
    	return $this->belongsTo('App\Models\Post','post_id');
    }
    public function user()
    {
    	return $this->belongsTo('App\Models\User','created_by');
    }
}
