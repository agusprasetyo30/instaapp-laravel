<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    /**
     * one to many ke tabel users
     *
     * @return void
     */
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    /**
     * one to many ke tabel posts
     *
     * @return void
     */
    public function posts()
    {
        return $this->belongsTo('App\Post', 'post_id', 'id');
    }
}
