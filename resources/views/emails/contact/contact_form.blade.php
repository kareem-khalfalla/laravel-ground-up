@component('mail::message')

# Thank you for you message

<strong>name</strong> {{ $data['name'] }}
<strong>email</strong> {{ $data['email'] }}
<strong>message</strong> {{ $data['message'] }}

{{--  The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }} --}}


@endcomponent
