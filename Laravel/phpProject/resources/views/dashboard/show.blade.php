@extends ('layout')

@section ('content')
    <title>wongus - dashboard details</title>
    <body class="singlePage">
    <div class="subNavHeader">
        <div id="subLogo">
            <a class="link" href="/"><h1><b>wongus</b></h1></a>
        </div>
        <a class="button smallerButton" href="/dashboard"><p>Go back</p></a>
        <a class="button smallerButton" href="/dashboard/{{$grade->id}}/edit"><p>Edit course</p></a>
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
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    </body>
@endsection
