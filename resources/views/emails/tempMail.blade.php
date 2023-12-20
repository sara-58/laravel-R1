<x-mail::message>
# Introduction
You have recieved new message from 

Name : {{ $content['userName'] }}

Email : {{ $content['userEmail'] }}

Message: {{ $content['message'] }}

<!-- <x-mail::button :url="''">
Button Text
</x-mail::button> -->

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
