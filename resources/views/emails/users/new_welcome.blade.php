@component('mail::message')
# Welcome new user...

YEY!! YOU MADE IT... LET'S ROCK

@component('mail::button', ['url' => 'http://localhost:8088/'])
GO HOMIEE
@endcomponent

Thanks, Bye<br>
{{ config('app.name') }}
@endcomponent
