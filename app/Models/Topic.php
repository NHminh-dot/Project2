<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Topic extends Model
{
    protected $table = 'topic';
    public $timestamps = false;
    protected $fillable = ['name','description'];
}