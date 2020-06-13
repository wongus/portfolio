@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row text-center">
            <div class="col-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="container d-flex justify-content-center">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email"
                                           class="col-auto col-form-label text-center">{{ __('E-Mail Address') }}</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus
                                                   style="width: 330px;">
                                        </div>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group pb-4">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-center">{{ __('Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               required autocomplete="current-password" style="width: 330px;">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group justify-content-center">
                                    <button type="submit" class="btn btn-success mb-2"
                                            style="width: 330px; border-radius: 101px; box-shadow:  5px 5px 10px #cbcaca;">
                                        {{ __('Login') }}
                                    </button>

                                    <div class="row">
                                        <div class="col-auto">
                                            <a class="ml-5 btn btn-link"
                                               href="{{ route('password.request') }}">
                                                {{ __('Forgot Password?') }}
                                            </a>
                                            <b>or</b>
                                            <a class="btn btn-link" href="{{ route('register') }}">
                                                {{ __('Sign up') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
