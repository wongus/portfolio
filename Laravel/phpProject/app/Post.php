<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function create($title, $body, $slug) {
        $post = new Post;
        $post->title = $title;
        $post->body = $body;
        $post->slug = $slug;
        $post->save();
    }

    public function delete() {
        $this->title = '';
        $this->body = '';
        $this->slug = '';
        $this->save();
    }
}
