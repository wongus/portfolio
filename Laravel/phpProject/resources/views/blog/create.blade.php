@extends ('layout')

@section ('content')
    <title>wongus - create</title>
    <body class="singlePage">
    <div class="subNavHeader">
        <div id="subLogo">
            <a class="link" href="/"><h1><b>wongus</b></h1></a>
        </div>
        <a class="button smallerButton" href="/blog"><p>Go back</p></a>
        <div class="aboutSubject blogNavHeader"><p>Create a new article</p></div>
    </div>
    <div class="form">
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
                <textarea name="body" cols="40" row="5" id="body"></textarea>
            </div>
        </div>

        <div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
    </div>
@endsection
