@extends('base')

@section('content')
<div class="screen">
    <div class="lofo">
        <div class="form-group fl fl-col">
            @if (session('resent'))
                <div role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
            <p>{{ __('If you did not receive the email') }},</p>
        </div>
        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <div class="fl fl-j-cen">
                <button type="submit" class="btn btn-inverted btn-fit">{{ __('click here to request another') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
