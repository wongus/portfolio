@extends ('layouts.layout')

@section ('content')
    <title>wongus - create</title>
    <body class="singlePage">
    <nav class="navbar navbar-expand navbar-light bg-light p-0 neunav">
        <a class="navbar-brand" id="subLogo" href="/" style="font-size: 4vh;"><b>wongus</b></a>
        <p class="my-auto" style="color: #2F2F2F; font-family: 'Roboto'">Create a new table row</p>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link mr-2" href="/dashboard" style="color: #2F2F2F; font-family: 'Roboto'">Go back</a>
            </li>
        </ul>
    </nav>
    <div class="container text-center">
        <form class="pt-5" method="POST" action="/dashboard">
            <div class="form-group">
                @csrf
                <label for="title">Course</label>
                <input class="form-control" type="text" name="course" placeholder="Enter course name">
                @error ('course')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="Body">EC</label>
                <input class="form-control" name="EC" placeholder="Enter course EC">
                @error ('EC')
                <small class="form-text text-danger">
                    {{$message = 'EC must be a number'}}
                </small>
                @enderror
            </div>

            <button class="btn smallerButton" type="submit">Submit</button>
        </form>
    </div>

@endsection
