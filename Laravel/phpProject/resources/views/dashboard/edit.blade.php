@extends ('layout')

@section ('content')
    <title>wongus - edit</title>
    <body class="singlePage">
    <nav class="navbar navbar-expand navbar-light bg-light p-0 neunav">
        <a class="navbar-brand" id="subLogo" href="/" style="font-size: 4vh;"><b>wongus</b></a>
        <p class="my-auto" style="color: #2F2F2F; font-family: 'Roboto'">Edit a existing course</p>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link mr-2" href="/dashboard" style="color: #2F2F2F; font-family: 'Roboto'">Go back</a>
            </li>
        </ul>
    </nav>
    <div class="form">
        <form method="POST" action="/dashboard/{{$grade->id}}">
            @csrf
            @method('PUT')
            <div>
                <label for="course">Course</label>
                <div>
                    <input type="text" name="course" id="course" value="{{$grade->course}}">
                </div>
            </div>

            <div>
                <label for="EC">EC</label>
                <div>
                    <input type="text" name="ec" id="ec" value="{{$grade->ec}}">
                </div>
            </div>

            <div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
@endsection
