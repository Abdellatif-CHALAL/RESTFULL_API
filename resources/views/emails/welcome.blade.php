@component('mail::message')
# HELLO {{$user->name}}

thank you for creating an account. please verify your email using this button: 

@component('mail::button', ['url' => route('verify',$user->verification_token)])
Verify account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
