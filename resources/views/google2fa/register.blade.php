@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body" style="text-align: center;">
                        <div class="h4 mb-3">{{ __('Set up Google Authenticator') }}</div>
                        <p class="mb-0">Set up your two factor authentication by scanning the barcode below.</p>
                        <p>or use this code: {{$secret}}</p>
                        <div class="pb-3">
                            <img src="{{ $QR_Image }}"
                                 style="filter: brightness(0.94); border: 2px solid #cbcaca; border-radius: 20px;">
                        </div>
                        <p class="mb-0">You must set up your Google Authenticator app before continuing.</p>
                        <p class="mb-3">You won't be able to login
                            otherwise</p>
                        <div>
                            <a href="/complete-registration">
                                <button class="btn btn-success"
                                        style="width: 200px; border-radius: 101px; box-shadow:  5px 5px 10px #cbcaca;">
                                    Complete Registration
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
