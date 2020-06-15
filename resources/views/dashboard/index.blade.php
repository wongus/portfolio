@extends ('layouts.layout')

@section ('content')
    <title>wongus - dashboard</title>
    <body class="singlePage">
    <nav class="navbar navbar-expand navbar-light bg-light p-0 neunav">
        <a class="navbar-brand" id="subLogo" href="/" style="font-size: 4vh;"><b>wongus</b></a>
        <p class="my-auto" style="color: #2F2F2F; font-family: 'Roboto'">Dashboard</p>
        <ul class="navbar-nav ml-auto">
            @can('create-edit-content')
                <li class="nav-item">
                    <a class="nav-link mr-2" href="/dashboard/create" style="color: #2F2F2F; font-family: 'Roboto'">Add
                        row</a>
                </li>
            @endcan
        </ul>
    </nav>
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
                        @can('create-edit-content')
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
                        @endcan
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    </body>
@endsection
