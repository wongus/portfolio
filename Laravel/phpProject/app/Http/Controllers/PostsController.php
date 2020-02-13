<?php


namespace App\Http\Controllers;

use DB;
use App\Post;
use Illuminate\Support\Str as str;

class PostsController
{

    public function index() {
        $posts = Post::latest()->get();

        return view('blog.index', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.show', ['post' => $post]);
    }

    public function create() {
    return view('blog.create');
    }

    public function savePostToDB($post){
        $post->title = request('title');
        $post->body = request('body');
        $post->slug = str::slug(request('title'), '-');
        $post->save();
    }

    public function store() {
        $post = new Post;
        $this->savePostToDB($post);

        return redirect('/blog');
    }

    public function edit($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.edit', ['post' => $post]);
    }

    public function delete($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->delete();
        return redirect('/blog');
    }

    public function update($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        $this->savePostToDB($post);

        return redirect('blog/' . $post->slug);
    }
}
