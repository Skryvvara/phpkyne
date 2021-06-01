@extends('base')

@section('content')
<div class="screen">
    <form class="lofo" method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group fl fl-col">
            <label for="email">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert"><b>{{ $message }}</b></span>
            @enderror
        </div>

        <div class="form-group fl fl-col fl-a-cen">
            <button type="submit" class="btn btn-inverted btn-fit">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </form>
</div>
@endsection
