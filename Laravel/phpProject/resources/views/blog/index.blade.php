@extends ('layout')

@section ('content')
    <title>wongus - blog</title>
    <div class="subNavHeader">
        <div id="subLogo">
            <a class="link" href="/"><h1><b>wongus</b></h1></a>
        </div>
        <a class="button smallerButton" href="/blog/create"><p>Create post</p></a>
        <div class="aboutSubject blogNavHeader"><p>Recently published articles</p></div>
    </div>
    <div class="singlePage">
        <div class="articlePreviews">
            @foreach ($posts as $post)
                <a href="/blog/{{$post->slug}}"><p class="previewHeader">{{$post->title}}</p></a>
                <a href="/blog/{{$post->slug}}"><img src="https://picsum.photos/id/{{$post->id+11}}/1080"></a>
            @endforeach
        </div>
    </div>
@endsection
