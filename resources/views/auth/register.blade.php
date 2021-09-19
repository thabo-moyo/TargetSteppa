@extends('layouts.app')

@section('content')
<div class="container center-screen ">
    <div class="col-4 bg-white rounded">
        <div class="row">
            <div class="col-12 p-3 w-100 h-100 text-center ">
                <div class="login-header d-flex justify-content-center pt-5">
                    <h5 for="email" class="col-md-4 col-form-label text-md-right text-xl text-bold">{{ __('Register') }}
                    </h5>
                </div>
                <form class="d-flex flex-column form-custom text-left" method="POST"
                    action="{{ route('register') }}">
                    @csrf
                    <div class="row mt-5 justify-content-between">
                        <div class="col-md-5 login-container ">
                            <label for="first_name" class="  text-md-right">{{ __('First Name') }}</label>
                            <input id="first-name" type="text" class="pb-3  @error('first_name') is-invalid @enderror"
                                name="first_name" value="{{ old('first_name') }}" required  autofocus>
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-5 login-container">
                            <label for="last_name" class=" text-md-right">{{ __('Last Name') }}</label>
                            <input id="last_name" type="text" class="pb-3 d-block @error('last_name') is-invalid @enderror"
                                name="last_name" value="{{ old('last_name') }}" required  autofocus>
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div
                    </div>
                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-md-12 login-container">

                            <label for="email" class="col-md-4 d-block text-md-right">{{ __('Email') }}</label>
                            <input id="email" type="email" class="pb-3 d-block @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-md-12 login-container">
                            <label for="password" class="col-md-4 text-md-right">{{ __('Password') }}</label>
                            <input id="password" type="password" class="pb-3 d-block  @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-md-12 login-container">
                            <label for="password-confirm" class="col-md-4 text-md-right">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="pb-3 d-block" name="password_confirmation" required
                                autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0 mt-5">
                        <div class="col-md-12 border-0">
                            <button type="submit" class="animate-pulse-200 hover:bg-purple-700 w-100 border-0  text-white btn bg-gradient-to-r from-purple-700 to-blue-500 rounded-lg">
                                {{ __('Sign Up') }}
                            </button>

                        </div>
                    </div>
                    <div class="row mt-5 focus:outline-none">
                        <div class="div col-md-12 text-center focus:outline-none">
                            <a class="hover:text-green-800 focus:outline-none btn-link justify-self-end align-self-end text-gray-500" href="{{ route('login') }}">
                                {{ __(' Login') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
