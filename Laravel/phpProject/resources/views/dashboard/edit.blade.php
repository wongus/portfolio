@extends ('layout')

@section ('content')
    <title>wongus - edit</title>
    <body class="singlePage">
    <div class="subNavHeader">
        <div id="subLogo">
            <a class="link" href="/"><h1><b>wongus</b></h1></a>
        </div>
        <a class="button smallerButton" href="/dashboard/{{$detail->id}}"><p>Go back</p></a>
        <div class="aboutSubject blogNavHeader"><p>Edit an existing article</p></div>
    </div>
    <div class="form">
        <form method="POST" action="/dashboard/{{$detail->id}}">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Test(s)</label>
                <div>
                    <input type="text" name="title" id="test" value="{{$detail->test}}">
                </div>
            </div>

            <div>
                <label for="title">Weighting(s)</label>
                <div>
                    <input type="text" name="title" id="weighting" value="{{$detail->weighting}}">
                </div>
            </div>

            <div>
                <label for="title">Score</label>
                <div>
                    <input type="text" name="title" id="title" value="{{$detail->score}}">
                </div>
            </div>

            <div class="formButtons">
                <button type="submit">Submit</button>
            </div>
        </form>
        <form method="POST" action="/dashboard/{{$detail->id}}">
            @csrf
            @method('delete')

            <div>
                <div>
                    <button type="delete">Delete</button>
                </div>
            </div>
        </form>

@endsection
