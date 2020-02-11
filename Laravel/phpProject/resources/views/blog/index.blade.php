@extends ('layout')

@section ('content')
    <title>wongus - blog</title>
    <body class="singlePage">
    <div class="subNavHeader">
        <div id="subLogo">
            <a class="link" href="/"><h1><b>wongus</b></h1></a>
        </div>
        <a class="button smallerButton" href="/blog/create"><p>Create post</p></a>
        <h1 class="aboutSubject blogNavHeader">Recently published articles</h1>
    </div>
    <div class="singlePage">
        <div class="articlePreviews">
            <ul class="previewElements">
                @foreach ($posts as $post)
                    <a href="/blog/{{$post->slug}}"><img src="https://picsum.photos/100"></a>
                @endforeach
            </ul>
        </div>
    </div>
    </body>
@endsection
