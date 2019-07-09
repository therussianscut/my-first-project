@include('layout.app')

@component('mail::message')


<h1> Thanks for your email</h1>


<strong> Name: </strong> {{$data['name']}}
<strong> Email: </strong> {{$data['email']}}
<strong> Message: </strong> {{$data['message']}}





@endcomponent
