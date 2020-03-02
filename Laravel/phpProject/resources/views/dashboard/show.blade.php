@extends ('layout')

@section ('content')
    <title>wongus - dashboard details</title>
    <body class="singlePage">
    <div class="subNavHeader">
        <div id="subLogo">
            <a class="link" href="/"><h1><b>wongus</b></h1></a>
        </div>
        <a class="button smallerButton" href="/dashboard"><p>Go back</p></a>
        <a class="button smallerButton" href="/dashboard/{{$grade->id}}/create"><p>Add test</p></a>
        <div class="aboutSubject blogNavHeader"><p>{{$grade->course}}</p></div>
    </div>
    <div class="singlePage">
        <div class="articlePreviews">
            <table>
                <tr>
                    <th>Test</th>
                    <th>Weighting (%)</th>
                    <th>Score</th>
                    <th>Passed</th>
                </tr>
                @foreach ($details as $detail)
                    <tr>
                        <td>{{$detail->test}}</td>
                        <td>{{$detail->weighting}}</td>
                        <td>{{$detail->score}}</td>
                        <td>{{$detail->passed}}</td>
                        <td class="iconRow">
                            <div class="icons">
                                <a href="/dashboard/course/{{$grade->id}}/edit"><p class="editIcon icon">✎</p></a>
                                <form method="POST" action="/dashboard/course/{{$detail->id}}">
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
