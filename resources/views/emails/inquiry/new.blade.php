@component('mail::message')
Hi {{$user->name}}
<h3>We have a new inquriy!.</h3>
<h1>{{$inquiry->getSubject()}}</h1>
<h2>{{$inquiry->getMessage()}}</h2>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
