@extends('layouts.app')

@section('content')
    <div class="container center-screen ">
        <div class="col-4 bg-white rounded">
            <div class="row">
                <div class="col-12 p-3 w-100 h-100 text-center ">
                    <div class="login-header d-flex justify-content-center pt-5">
                        <h5 for="email" class="col-md-4 col-form-label text-md-right text-xl text-bold">{{ __('Login') }}
                        </h5>
                    </div>
                    <form class="d-flex flex-column align-content-center justify-content-center text-left p-5" method="POST"
                        action="{{ route('login') }}">
                        @csrf
                        <div class="row mt-2 d-flex justify-content-center">
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
                        @if (Route::has('password.request'))
                        <a class="hover:text-green-800 focus:outline-none btn btn-link justify-self-end align-self-end text-gray-500" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                          @endif

                        <div class="form-group row mb-0 mt-5">
                            <div class="col-md-12 border-0">
                                <button type="submit" class="animate-pulse-200 hover:bg-purple-700 w-100 border-0  text-white btn bg-gradient-to-r from-purple-700 to-blue-500 rounded-lg">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                        <div class="row mt-5 focus:outline-none">
                            <div class="div col-md-12 text-center focus:outline-none">
                                <a class="hover:text-green-800 focus:outline-none btn-link justify-self-end align-self-end text-gray-500" href="{{ route('register') }}">
                                    {{ __('SIGN UP') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
