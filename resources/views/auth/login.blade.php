@extends('base')

@section('title', 'Login')

@section('content')
<div class="screen">
    <form class="lofo" method="POST" action="{{ route('login') }}">
        <div class="form-group fl fl-col fl-j-cen tal-cen title">
            <h1><b>Login</b></h1>
        </div>
        @csrf

        <div class="form-group fl fl-col">
            <label for="username">{{ __('Name') }}</label>

            <input id="username" type="username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert"><b>{{ $message }}</b></span>
            @enderror
        </div>

        <div class="form-group fl fl-col">
            <label for="password">{{ __('Password') }}</label>

            <input id="password" type="password" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert"><b>{{ $message }}</b></span>
            @enderror
        </div>

        <div class="form-group fl fl-row fl-a-cen">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>

        <div class="form-group fl fl-col fl-a-cen">
            <button type="submit" class="btn btn-inverted btn-fit">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="auth-notice" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
</div>
@endsection
