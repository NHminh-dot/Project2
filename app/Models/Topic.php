<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Topic extends Model
{
	const UPDATED_AT = null;
    protected $table = 'topic';
    protected $fillable = [
    	'name',
    	'description',
    	'created_by'
    ];
    public function user()
    {
    	return $this->belongsTo('App\Models\User','created_by');
    }
}
