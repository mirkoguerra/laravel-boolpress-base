<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $table = 'tags';

  public function tagToPost() {

    return $this->belongsToMany('App\Post', 'posts_to_tags', 'post_id', 'tag_id');

  }

}
