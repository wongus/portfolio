@extends ('layouts.layout')

@section ('content')
    <title>wongus - dashboard details</title>
    <body class="singlePage">
    <nav class="navbar navbar-expand navbar-light bg-light p-0 neunav">
        <a class="navbar-brand" id="subLogo" href="/" style="font-size: 4vh;"><b>wongus</b></a>
        <p class="my-auto" style="color: #2F2F2F; font-family: 'Roboto'">{{$grade->course}}</p>
        <ul class="navbar-nav ml-auto">
            @can('create-edit-content')
                <li class="nav-item">
                    <a class="nav-link mr-2" href="/dashboard/{{$grade->id}}/create"
                       style="color: #2F2F2F; font-family: 'Roboto'">Add
                        test</a>
                </li>
            @endcan
            <li class="nav-item">
                <a class="nav-link mr-2" href="/dashboard" style="color: #2F2F2F; font-family: 'Roboto'">Go back</a>
            </li>
        </ul>
    </nav>
    <div class="singlePage">
        <div class="articlePreviews">
            <table>
                <tr>
                    <th>Test</th>
                    <th>Weighting (%)</th>
                    <th>Score</th>
                    <th>Passed</th>
                </tr>
                @foreach ($grade->details as $detail)
                    <tr>
                        <td>{{$detail->test}}</td>
                        <td>{{$detail->weighting}}</td>
                        <td>{{$detail->score}}</td>
                        <td>{{$detail->passed}}</td>
                        @can('create-edit-content')
                            <td class="iconRow">
                                <div class="icons">
                                    <a href="/dashboard/course/{{$grade->id}}/edit"><p class="editIcon icon">✎</p></a>
                                    <form method="POST" action="/dashboard/course/{{$detail->id}}">
                                        @csrf
                                        @method('delete')
                                        <button style="all: unset;" type="icon"><p class="deleteIcon icon">✖</p>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        @endcan
                    </tr>

                @endforeach
            </table>
        </div>
    </div>
    </body>
@endsection
