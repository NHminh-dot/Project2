<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';
    protected $fillable = ['name'];
 	public $timestamps = false;
 	public function post_tag()
 	{
 		return $this->hasMany(PostTag::class);
 	}
}
