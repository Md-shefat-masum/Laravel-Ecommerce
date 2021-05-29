@extends('website.ecommerce.layouts.ecommerce')
@section('content')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="account-title mb-20 text-center">
                    <h1>My Account</h1>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-heading mb-25">
                    <h2>Login</h2>
                </div>
                <div class="account-form form-style p-20 mb-30 bg-fff box-shadow">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <b>email address <span>*</span></b>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <b>Password <span>*</span></b>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="login-button">
                            <button type="submit">Login</button>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    </form>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-heading mb-25">
                    <h2>Register</h2>
                </div>
                <div class="account-form form-style p-20 mb-30 bg-fff box-shadow">
                    <form action="#">
                        <b>Email address <span>*</span></b>
                        <input type="text" />
                        <b>Password <span>*</span></b>
                        <input type="password" />
                    </form>
                    <div class="login-button">
                        <button>register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
