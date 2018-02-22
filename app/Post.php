<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // Post belongs to User
    public function user() {
        return $this->belongsTo('App\User', 'author_id');
    }


    public function findBySlug($slug) {
        return $this->where('slug', $slug)->first();
    }

    // static call
//    public static function findBySlugStatic($slug) {
//        return static::where('slug', $slug)->first();
//    }

}
