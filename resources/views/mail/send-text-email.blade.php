@component('mail::html.layout')
# Bienvenue Luc ceci est un mail
The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
