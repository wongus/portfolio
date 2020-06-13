@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="container-fluid position-absolute">
            <div class="row d-flex justify-content-end">
                    <a href="/" class="nav-links m-0 mr-3 d-flex">
                        <i class="fas fa-arrow-circle-left" style="font-size: 25px; color: #212529"></i>
                    </a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="h4 mb-3 text-center">{{ __('Users') }}</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role(s)</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                    @can('edit-users')
                                        <a class="btn btn-secondary float-left mr-2" style="border-radius: 10px; box-shadow:  5px 5px 10px #cbcaca;"
                                           href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                                    @endcan
                                    @can('delete-users')
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST"
                                              class="float-left">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="border-radius: 10px; box-shadow:  5px 5px 10px #cbcaca;" class="btn btn-danger">Delete</button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
