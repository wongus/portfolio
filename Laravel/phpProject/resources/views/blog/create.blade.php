@extends ('layouts.layout')

@section ('content')
    <title>wongus - create</title>
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
        <form method="POST" action="/blog">
            @csrf
            <div>
                <label for="title">Title</label>
                <div>
                    <input type="text" name="title" id="title">
                </div>
            </div>

            <div>
                <label for="Body">Body</label>
                <div>
                    <textarea name="body" cols="30" row="5" id="body"></textarea>
                </div>
            </div>

            <div>
                <button class="btn smallerButton" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
