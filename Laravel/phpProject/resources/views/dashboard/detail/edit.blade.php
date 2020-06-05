@extends ('layouts.layout')

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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/dashboard/{{$detail->id}}">
            @csrf
            @method('PUT')
            <div>
                <label for="test">Test</label>
                <div>
                    <input type="text" name="test" id="test" value="{{$detail->test}}">
                </div>
            </div>

            <div>
                <label for="weighting">Weighting</label>
                <div>
                    <input type="text" name="weighting" id="weighting" value="{{$detail->test}}">
                </div>
            </div>

            <div>
                <label for="score">Score</label>
                <div>
                    <input type="text" name="score" id="score" value="{{$detail->score}}">
                </div>
            </div>

            <div>
                <div>
                    <button class="btn smallerButton" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
