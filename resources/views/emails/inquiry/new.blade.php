@component('mail::message')
Hi {{$user->name}}
We have a new inquriy!.
<h1>{{$inquiry->subject}}</h1>

<h2>{{$inquiry->content}}</h2>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
