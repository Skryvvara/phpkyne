@extends('base')

@section('title', 'Register')

@section('content')
<div class="screen">
    <form class="lofo" method="POST" action="{{ route('register') }}">
        <div class="form-group fl fl-col fl-j-cen tal-cen title">
            <h1><b>Register</b></h1>
        </div>
        @csrf

        <div class="form-group fl fl-col">
            <label for="name">{{ __('Name') }}</label>

            <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name"  autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert"><b>{{ $message }}</b></span>
            @enderror
        </div>

        <div class="form-group fl fl-col">
            <label for="email">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email" name="email" value="{{ old('email') }}"  placeholder="E-mail" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert"><b>{{ $message }}</b></span>
            @enderror
        </div>

        <div class="form-group fl fl-col">
            <label for="password">{{ __('Password') }}</label>

            <input id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert"><b>{{ $message }}</b></span>
            @enderror
        </div>

        <div class="form-group fl fl-col">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
        </div>

        <div class="form-group fl fl-col fl-a-cen">
            <button type="submit" class="btn btn-inverted btn-fit">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
@endsection
