@extends('layouts.auth')

@push('style')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush

@section('content')

<div class="w-100">
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('auth.login') }}" id="login-form">
            <h1 class="h2 mb-0 fw-normal text-center"><strong>ABSENSI</strong></h1>
            <img src="{{ asset('images/inti.png') }}" alt="Description of the image" class="mx-auto d-block img-fluid mb-4" width="200" height="150">

            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingInputEmail" name="email"
                    placeholder="name@example.com">
                <label for="floatingInputEmail">Email address</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" name="password"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckRemember">
                <label class="form-check-label" for="flexCheckRemember">
                    Ingatkan Saya di Perangkat ini
                </label>
            </div>

            <button class="w-50 d-flex justify-content-center mx-auto btn btn-primary" type="submit" id="login-form-button">Masuk</button>
            <p class="mt-5 mb-3 text-muted text-right"></p>
        </form>
    </main>
</div>
@endsection

@push('script')
<script type="module" src="{{ asset('js/auth/login.js') }}"></script>
@endpush