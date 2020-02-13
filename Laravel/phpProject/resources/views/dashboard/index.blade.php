@extends ('layout')

@section ('content')
    <title>wongus - dashboard</title>
    <body class="singlePage">
    <div class="subNavHeader">
        <div id="subLogo">
            <a class="link" href="/"><h1><b>wongus</b></h1></a>
        </div>
        <a class="button smallerButton" href="/dashboard/create"><p>Add row</p></a>
        <div class="aboutSubject blogNavHeader"><p>Dashboard</p></div>
    </div>
    <div class="singlePage">
        <div class="articlePreviews">
            <table>
                <tr>
                    <th>Course</th>
                    <th>EC</th>
                </tr>
                    @foreach ($grades as $grade)
                    <tr>
                        <td><a href="dashboard/{{$grade->id}}">{{$grade->course}}</a></td>
                        <td>{{$grade->EC}}</td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
    </body>
@endsection
