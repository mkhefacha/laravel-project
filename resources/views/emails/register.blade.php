@component('mail::message')
valider ton compte !

salut {{$user->name}}

valider sur button ci-dessous pour valider voter compte
@component('mail::button', ['url' => route('confirmation',[$user,$user->token])])
valider votre compte
@endcomponent

Thanks,<br>
Mr.{{$user->name}}
@endcomponent
