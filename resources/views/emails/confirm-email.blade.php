@component('mail::message')
# Welcome to {{ config('larastart.name') }}!

Before you can begin using most of our features, you will need to verify your email address by clicking the link below.

@component('mail::button', ['url' => url('/token/' . $token)])
Confirm Email Address
@endcomponent

Thanks,<br>
{{ config('larastart.name') }}
@endcomponent
