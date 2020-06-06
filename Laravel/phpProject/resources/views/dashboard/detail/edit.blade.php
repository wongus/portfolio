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
    <div class="container text-center">
        <form class="pt-5" method="POST" action="/dashboard/{{$detail->id}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                @csrf
                <label for="title">Test</label>
                <input class="form-control" type="text" name="test" value="{{$detail->test}}">
                @error ('test')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="Body">Weighting (%)</label>
                <input class="form-control" name="weighting" value="{{$detail->weighting}}">
                @error ('weighting')
                <small class="form-text text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="Body">Score</label>
                <input class="form-control" name="score" value="{{$detail->score}}">
                @error ('score')
                <small class="form-text text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <button class="btn smallerButton" type="submit">Submit</button>
        </form>
    </div>

@endsection
