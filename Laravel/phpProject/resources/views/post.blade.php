@extends ('layout')

@section ('contentPost')
    <h1 class="subjectHeader">Blog</h1>

    <p class="aboutSubject">{{ $post->body }}</p>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
@endsection
