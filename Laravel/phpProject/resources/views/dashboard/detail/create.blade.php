@extends ('layout')

@section ('content')
    <title>wongus - create</title>
    <body class="singlePage">
    <div class="subNavHeader">
        <div id="subLogo">
            <a class="link" href="/"><h1><b>wongus</b></h1></a>
        </div>
        <a class="button smallerButton" href="/dashboard"><p>Go back</p></a>
        <div class="aboutSubject blogNavHeader"><p>Add a new test</p></div>
    </div>
    <div class="form">
        <form method="POST" action="/dashboard/{{$grade->id}}">
            @csrf
            <div>
                <label for="test">Test</label>
                <div>
                    <input type="text" name="test" id="test">
                </div>
            </div>

            <div>
                <label for="weighting">Weighting</label>
                <div>
                    <input type="text" name="weighting" id="weighting">
                </div>
            </div>

            <div>
                <label for="score">Score</label>
                <div>
                    <input type="text" name="score" id="score">
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
