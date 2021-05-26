@extends('base')

@section('content')
<div class="screen">
    <form class="lofo" method="POST" action="{{ route('password.confirm') }}">
        <p>{{ __('Please confirm your password before continuing.') }}</p>
        @csrf

        <div class="form-group fl fl-col">
            <label for="password">{{ __('Password') }}</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group fl fl-col fl-a-cen">
            <button type="submit" class="btn btn-inverted btn-fit">
                {{ __('Confirm Password') }}
            </button>

            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
</div>
@endsection
