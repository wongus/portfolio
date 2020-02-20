@extends ('layout')

@section ('content')
    <title>wongus - edit</title>
    <body class="singlePage">
    <div class="subNavHeader">
        <div id="subLogo">
            <a class="link" href="/"><h1><b>wongus</b></h1></a>
        </div>
        <a class="button smallerButton" href="/blog/{{$post->slug}}"><p>Go back</p></a>
        <div class="aboutSubject blogNavHeader"><p>Edit an existing article</p></div>
    </div>
    <div class="form">
        <form method="POST" action="/blog/{{$post->slug}}">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title</label>
                <div>
                    <input type="text" name="title" id="title" value="{{$post->title}}">
                </div>
            </div>

            <div class="textarea">
                <label for="Body">Body</label>
                <div>
                    <textarea name="body" cols="40" row="5" id="body">{{$post->body}}</textarea>
                </div>
            </div>
            <div class="formButtons">
                <button type="submit">Submit</button>
            </div>
        </form>
        <form method="POST" action="/blog/{{$post->slug}}">
            @csrf
            @method('delete')

            <div>
                <div>
                    <button type="delete">Delete</button>
                </div>
            </div>
        </form>
    </body>
@endsection
