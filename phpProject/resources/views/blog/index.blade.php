@extends ('layouts.layout')

@section ('content')
    <title>wongus - blog</title>
    <nav class="navbar navbar-expand navbar-light bg-light p-0 neunav">
        <a class="navbar-brand" id="subLogo" href="/" style="font-size: 4vh;"><b>wongus</b></a>
        <p class="my-auto" style="color: #2F2F2F; font-family: 'Roboto'">Recently published articles</p>
        <ul class="navbar-nav ml-auto">
            @guest
            @else
                <li class="nav-item">
                    <a class="nav-link mr-2" href="/blog/create" style="color: #2F2F2F; font-family: 'Roboto'">Create
                        post</a>
                </li>
            @endguest
        </ul>
    </nav>
    <div class="singlePage">
        <div class="articlePreviews">
            @foreach ($posts as $post)
                <a href="/blog/{{$post->slug}}"><p class="previewHeader">{{$post->title}}</p></a>
                <a href="/blog/{{$post->slug}}"><img src="https://picsum.photos/id/{{$post->id+11}}/1080"></a>
            @endforeach
        </div>
    </div>
@endsection
