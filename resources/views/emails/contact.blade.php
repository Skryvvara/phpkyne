@component('mail::message')
# New Message from {{ $data['name'] }}

{{ $data['name'] }} ({{ $data['email'] }}) wrote: <br>
{{ $data['message'] }}

@component('mail::button', ['url' => 'https://darkyne.com'])
Go to site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
