@extends('app')

@section('title', 'Sign In')

@section('body-class', 'd-flex flex-column bg-white')
@section('body')
    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('svg/logo.svg') }}" height="36" alt="">
                    </a>
                </div>
                <h2 class="h3 text-center mb-3">
                    Login to your account
                </h2>
                <form action="{{ route('login.post') }}" method="POST" autocomplete="off">
                    @csrf
                    @include('components.alerts')
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="your@email.com" required autocomplete="emailss">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Password
                            <span class="form-label-description">
                                <a href="{{ route('forgot') }}">Forgot Password?</a>
                            </span>
                        </label>
                        <input type="password" class="form-control" name="password" placeholder="Your password" required autocomplete="off">
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" name="remember" class="form-check-input" />
                            <span class="form-check-label">Remember me</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-dark w-100">Sign in</button>
                    </div>
                </form>
                <div class="text-center text-muted mt-3">
                    Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <div class="bg-cover h-100 min-vh-100" style="background-image: url({{ asset('img/covers/img-1.jpg') }})"></div>
        </div>
    </div>
@endsection
