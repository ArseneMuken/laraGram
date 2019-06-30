@component('mail::message')
# Bienvenue sur LaraGram

Un projet teste rèalisé en Laravel dans la version 5.8 par ArseneMuken

{{--@component('mail::button', ['url' => ''])--}}
{{--Activer--}}
{{--@endcomponent--}}

Merci,<br>
{{ config('app.name') }}
@endcomponent
