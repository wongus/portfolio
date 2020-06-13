@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row text-center">
            <div class="col-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="container d-flex justify-content-center">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="name"
                                           class="col-auto col-form-label text-center">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus
                                               style="width: 330px;">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email"
                                           class="col-auto col-form-label text-center">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email"
                                               style="width: 330px;">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password"
                                           class="col-auto col-form-label text-center">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password"
                                               style="width: 330px;">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group pb-4">
                                    <label for="password-confirm"
                                           class="col-auto col-form-label text-center">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password"
                                               style="width: 330px;">
                                    </div>
                                </div>

                                <div class="form-group justify-content-center">
                                    <button type="submit" class="btn btn-success"
                                            style="width: 330px; border-radius: 101px; box-shadow:  5px 5px 10px #cbcaca;">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
