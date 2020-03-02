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
                        <td><a href="dashboard/course/{{$grade->id}}">{{$grade->course}}</a></td>
                        <td>{{$grade->EC}}</td>
                        <td class="iconRow">
                            <div class="icons">
                                <a href="/dashboard/{{$grade->id}}/edit"><p class="editIcon icon">✎</p></a>
                                <form method="POST" action="/dashboard/{{$grade->id}}">
                                    @csrf
                                    @method('delete')
                                    <button type="icon"><p class="deleteIcon icon">✖</p></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    </body>
@endsection
