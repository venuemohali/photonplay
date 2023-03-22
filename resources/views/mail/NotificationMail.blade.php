@component('mail::message')
 {{$message->body}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
