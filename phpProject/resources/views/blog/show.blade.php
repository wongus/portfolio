@extends ('layouts.layout')

@section ('content')
    <title>wongus - {{$post->title}}</title>
    <nav class="navbar navbar-expand navbar-light bg-light p-0 neunav">
        <a class="navbar-brand" id="subLogo" href="/" style="font-size: 4vh;"><b>wongus</b></a>
        <p class="my-auto" style="color: #2F2F2F; font-family: 'Roboto'">View article</p>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link mr-2" href="/blog" style="color: #2F2F2F; font-family: 'Roboto'">Go back</a>
            </li>
            @guest
            @else
                <li class="nav-item">
                    <a class="nav-link mr-2" href="/blog/{{$post->slug}}/edit"
                       style="color: #2F2F2F; font-family: 'Roboto'">Edit post</a>
                </li>
            @endguest
        </ul>
    </nav>
    <div class="text-center subject singlePageElement">
        <h1 class="subjectHeader singlePageElement">{{ $post->title }}</h1>
        <pre class="aboutSubject">{{ $post->body }}</pre>
    </div>
@endsection
