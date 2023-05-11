@component('mail::message')
    <table style="width: 100%;">
        <tr>
            <td>
                <img src='{{ asset('assets/customer/images/logo-dark.png') }}' style="width: 200px; height: 100px;"  style="width:100%;" alt="Logo"/>
            </td>
        </tr>
    </table>
    <hr/>
    {!! $message->body !!}
    <h4>
    Thanks,<br>
    {{ config('app.name') }}</h4>
@endcomponent
