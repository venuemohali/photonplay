@component('mail::message')
    <table style="margin: 0 auto;">
        <tr>
            <td>
                <img src='{{ asset('assets/customer/images/logo-dark.png') }}' style="width: 200px; height: 100px;"  alt="Logo"/>
            </td>
        </tr>
    </table>
    {!! $message->body !!}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
