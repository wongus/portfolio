<?php


namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str as str;

class PostsController extends Controller
{

    /**
     * PostsController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth', '2fa'], ['only' => ['create', 'edit']]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $posts = Post::latest()->take(8)->get();

        return view('blog.index', ['posts' => $posts]);
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.show', ['post' => $post]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
    return view('blog.create');
    }

    /**
     * @param $post
     */
    public function savePostToDB($post){
        $post->title = request('title');
        $post->body = request('body');
        $post->slug = str::slug(request('title'), '-');
        $post->save();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        $validateData = $request->validate([
            'title' => 'required|unique:posts|max:50',
            'body' => 'required',
        ]);

        $post = new Post;
        $this->savePostToDB($post);

        return redirect('/blog');
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.edit', ['post' => $post]);
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->delete();
        return redirect('/blog');
    }

    /**
     * @param $slug
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($slug, Request $request) {
        $validateData = $request->validate([
            'title' => 'required|unique:posts|max:50',
            'body' => 'required',
        ]);

        $post = Post::where('slug', $slug)->firstOrFail();
        $this->savePostToDB($post);
        return redirect('blog/' . $post->slug);
    }
}
