@component('mail::message')
# Order Status Mail

Dear User,
Your current order status is {{$message}}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
