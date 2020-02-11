@extends ('layout')

@section ('content')
    <title>wongus - edit</title>
    <body class="singlePage">
    <div class="subNavHeader">
        <div id="subLogo">
            <a class="link" href="/"><h1><b>wongus</b></h1></a>
        </div>
        <a class="button smallerButton" href="/blog"><p>Go back</p></a>
        <h1 class="aboutSubject blogNavHeader">Create a new article</h1>
    </div>

    <div class="form">
        <form action="">
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

            <div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
