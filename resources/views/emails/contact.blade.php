@component('mail::message')
# New Message from {{ $data['name'] }}

{{ $data['name'] }} ({{ $data['email'] }}) wrote: <br>

@component('mail::panel')
{{ $data['message'] }}
@endcomponent

@component('mail::button', ['url' => 'https://darkyne.com'])
Go to site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
