<?php


namespace App\Http\Controllers;

use DB;
use App\Post;

class PostsController
{

    public function index() {
        $posts = Post::latest()->get();

        return view('blog.index', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('blog.show', ['post' => $post]);
    }

    public function create() {
    return view('blog.create');
    }

    public function store() {

    }

    public function edit($slug) {
        $post = Post::where('slug', $slug)->first();
        return view('blog.edit', ['post' => $post]);
    }

    public function update() {

    }

    public function destroy() {

    }
}
