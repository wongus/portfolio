<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str as str;

class Post extends Model
{
    public function editTitle($title) {
        $this->title = $title;
        $this->save();
    }

    public function editBody($body) {
        $this->body = $body;
        $this->save();
    }

    public function create($title, $body) {
        $post = new Post;
        $post->title = $title;
        $post->body = $body;
        $post->slug = str::slug($title, '-');
        $post->save();
    }
}
