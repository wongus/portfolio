@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row text-center">
            <div class="col-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="container d-flex justify-content-center">
                            <form class="form-horizontal" method="POST" action="{{ route('2fa') }}">
                                {{ csrf_field() }}

                                <div class="form-group pb-4">
                                    <label for="one_time_password" class="col-auto col-form-label text-center">One Time
                                        Password</label>

                                    <div class="col-md-6">
                                        <input id="one_time_password" class="form-control" name="one_time_password"
                                               required autofocus style="width: 330px;">
                                    </div>
                                </div>

                                <div class="form-group justify-content-center">
                                    <button type="submit" class="btn btn-success"
                                            style="width: 330px; border-radius: 101px; box-shadow:  5px 5px 10px #cbcaca;">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="form-group justify-content-center">
                                    <a href="/logout" class="btn btn-link mb-2">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
