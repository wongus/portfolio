@extends ('layouts.layout')

@section ('content')
    <title>wongus - edit</title>
    <body class="singlePage">
    <nav class="navbar navbar-expand navbar-light bg-light p-0 neunav">
        <a class="navbar-brand" id="subLogo" href="/" style="font-size: 4vh;"><b>wongus</b></a>
        <p class="my-auto" style="color: #2F2F2F; font-family: 'Roboto'">Edit a existing course</p>
    </nav>
    <div class="container text-center">
        <form class="pt-5" method="POST" action="/dashboard/{{$grade->id}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                @csrf
                <label for="title">Course</label>
                <input class="form-control" type="text" name="course" value="{{$grade->course}}">
                @error ('course')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="Body">EC</label>
                <input class="form-control" name="EC" value="{{$grade->ec}}">
                @error ('EC')
                <small class="form-text text-danger">
                    {{$message = 'EC must be a number'}}
                </small>
                @enderror
            </div>
            <button onclick="window.location='/dashboard'; return false;" class="btn smallerButton mr-4"><p
                    style="border-bottom: 1.5px solid #D1CDC7">Cancel</p></button>
            <button class="btn smallerButton ml-4" type="submit"><p style="border-bottom: 1.5px solid #a3db2e">Submit</p>
            </button>
        </form>
    </div>
@endsection
