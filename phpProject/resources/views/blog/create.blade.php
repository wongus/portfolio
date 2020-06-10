@extends ('layouts.layout')

@section ('content')
    <title>wongus - create article</title>
    <body class="singlePage">
    <nav class="navbar navbar-expand navbar-light bg-light p-0 neunav">
        <a class="navbar-brand" id="subLogo" href="/" style="font-size: 4vh;"><b>wongus</b></a>
        <p class="my-auto" style="color: #2F2F2F; font-family: 'Roboto'">Create a new article</p>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link mr-2" href="/blog" style="color: #2F2F2F; font-family: 'Roboto'">Go back</a>
            </li>
        </ul>
    </nav>
    <div class="container text-center">
        <form class="pt-5" method="POST" action="/blog">
            <div class="form-group">
                @csrf
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" placeholder="Enter article title">
                @error ('title')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="Body">Body</label>
                <textarea class="form-control" name="body" cols="30" row="5" id="body" placeholder="Enter article body"></textarea>
                @error ('body')
                <small class="form-text text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <button class="btn smallerButton" type="submit">Submit</button>
        </form>
    </div>
@endsection
