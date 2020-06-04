@extends ('layouts.layout')

@section ('content')
    <title>wongus - edit</title>
    <body class="singlePage">
    <nav class="navbar navbar-expand navbar-light bg-light p-0 neunav">
        <a class="navbar-brand" id="subLogo" href="/" style="font-size: 4vh;"><b>wongus</b></a>
        <p class="my-auto" style="color: #2F2F2F; font-family: 'Roboto'">Edit an existing article</p>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link mr-2" href="/blog" style="color: #2F2F2F; font-family: 'Roboto'">Go back</a>
            </li>
        </ul>
    </nav>
    <div class="form">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
                <button class="btn smallerButton" type="submit">Submit</button>
            </div>
        </form>
        <form method="POST" action="/blog/{{$post->slug}}">
            @csrf
            @method('delete')

            <div>
                <div>
                    <button class="btn smallerButton" type="delete">Delete</button>
                </div>
            </div>
        </form>
    </body>
@endsection
