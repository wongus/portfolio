@extends ('layout')

@section ('content')
    <title>wongus - edit</title>
    <body class="singlePage">
    <div class="subNavHeader">
        <div id="subLogo">
            <a class="link" href="/"><h1><b>wongus</b></h1></a>
        </div>
        <a class="button smallerButton" href="/dashboard"><p>Go back</p></a>
        <div class="aboutSubject blogNavHeader"><p>Edit an existing course</p></div>
    </div>
    <div class="form">
        <form method="POST" action="/dashboard/{{$grade->id}}">
            @csrf
            @method('PUT')
            <div>
                <label for="course">Course</label>
                <div>
                    <input type="text" name="course" id="course">
                </div>
            </div>

            <div>
                <label for="EC">EC</label>
                <div>
                    <input type="text" name="ec" id="course">
                </div>
            </div>

            <div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
@endsection
