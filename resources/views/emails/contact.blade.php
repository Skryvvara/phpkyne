@component('mail::message')
# New Message from {{ $data['name'] }}

{{ $data['name'] }} ({{ $data['email'] }}) wrote: <br>
@component('mail::panel')
<h1 style="margin-bottom: 0;">{{ $data['subject'] }}</h1> <br>
{{ $data['message'] }}
@endcomponent

@component('mail::button', ['url' => 'https://darkyne.com'])
Go to site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
