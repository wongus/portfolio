@extends ('layouts.layout')

@section ('content')
    <title>wongus - edit</title>
    <body class="singlePage">
    <nav class="navbar navbar-expand navbar-light bg-light p-0 neunav">
        <a class="navbar-brand" id="subLogo" href="/" style="font-size: 4vh;"><b>wongus</b></a>
        <p class="my-auto" style="color: #2F2F2F; font-family: 'Roboto'">Edit an existing article</p>
    </nav>
    <div class="container text-center">
        <form class="pt-5" method="POST" action="/blog/{{$post->slug}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
                @error ('title')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="Body">Body</label>
                <textarea class="form-control" name="body" cols="30" row="5" id="body">{{$post->body}}</textarea>
                @error ('body')
                <small class="form-text text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>
            <div class="row">
                <form method="POST" action="/blog/{{$post->slug}}">
                    <div class="col">
                        @csrf
                        @method('delete')
                        <button class="btn smallerButton p-2 ml-0" type="delete"><p
                                style="border-bottom: 1.5px solid #e55f56">
                                Delete</p></button>
                    </div>
                </form>
                <div class="col-auto offset-9">
                    <button onclick="window.location='/blog/{{$post->slug}}'; return false;"
                            class="btn smallerButton p-2">
                        <p style="border-bottom: 1.5px solid #D1CDC7">Cancel</p>
                    </button>
                </div>
                <div class="col-auto">
                    <button class="btn smallerButton p-2" type="submit"><p style="border-bottom: 1.5px solid #a3db2e">
                            Submit</p></button>
                </div>
            </div>
        </form>
    </div>
    </body>
@endsection
