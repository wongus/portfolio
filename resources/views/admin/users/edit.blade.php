@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row text-center">
            <div class="col-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="container d-flex justify-content-center">
                        <form action="{{ route('admin.users.update', $user) }}" method="POST">

                            <div class="form-group">
                                <label for="name" class="col-auto col-form-label text-center">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ $user->name }}" required autofocus style="width: 330px;">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-auto col-form-label text-center">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ $user->email }}" required autocomplete="email" autofocus style="width: 330px;">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="roles" class="col-auto col-form-label">Roles</label>
                                <div class="col-auto col-form-label text-left">
                                    @foreach ($roles as $role)
                                        <div class="form-check">
                                            <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                                   @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                            <label>{{ $role->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" style="width: 330px; border-radius: 101px; box-shadow:  5px 5px 10px #cbcaca;">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
