@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Set up Google Authenticator') }}</div>

                    <div class="card-body" style="text-align: center;">
                        <p>Set up your two factor authentication by scanning the barcode below. Alternatively, you can
                            use the code {{ $secret }}</p>
                        <div>
                            <img src="{{ $QR_Image }}">
                        </div>
                        <p>You must set up your Google Authenticator app before continuing. You will be unable to login
                            otherwise</p>
                        <div>
                            <a href="/complete-registration">
                                <button class="btn btn-primary">Complete Registration</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
