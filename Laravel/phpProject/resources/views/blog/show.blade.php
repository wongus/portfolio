@extends ('layout')

@section ('content')
    <title>wongus - {{$post->title}}</title>
    <div class="subNavHeader">
        <div id="subLogo">
            <a class="link" href="/"><h1><b>wongus</b></h1></a>
        </div>
        <a class="button smallerButton" href="/blog"><p>Go back</p></a>
        <a class="button smallerButton" href="/blog/{{$post->slug}}/edit"><p>Edit post</p></a>
    </div>
    <div class="subject singlePageElement">
        <h1 class="subjectHeader singlePageElement">{{ $post->title }}</h1>
        <pre class="aboutSubject">{{ $post->body }}</pre>
    </div>
@endsection
