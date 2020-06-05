@extends ('layouts.layout')

@section ('content')
    <title>wongus - create</title>
    <body class="singlePage">
    <nav class="navbar navbar-expand navbar-light bg-light p-0 neunav">
        <a class="navbar-brand" id="subLogo" href="/" style="font-size: 4vh;"><b>wongus</b></a>
        <p class="my-auto" style="color: #2F2F2F; font-family: 'Roboto'">Add a new test</p>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link mr-2" href="/dashboard" style="color: #2F2F2F; font-family: 'Roboto'">Go back</a>
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
                    <button class="btn smallerButton" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
