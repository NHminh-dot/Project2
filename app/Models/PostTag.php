<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $table = 'post_tag';
    protected $fillable = ['tag_id','post_id'];
    protected $primaryKey = ['tag_id','post_id'];
 	public $timestamps = false;
 	/**
 	 * PostTag belongs to Post.
 	 *
 	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 	 */
 	public function post()
 	{
 		// belongsTo(RelatedModel, foreignKey = post_id, keyOnRelatedModel = id)
 		return $this->belongsTo(Post::class);
 	}
 	/**
 	 * PostTag belongs to Tag.
 	 *
 	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 	 */
 	public function tag()
 	{
 		// belongsTo(RelatedModel, foreignKey = tag_id, keyOnRelatedModel = id)
 		return $this->belongsTo(Tag::class);
 	}
}
