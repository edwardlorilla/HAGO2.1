@component('mail::message')
Greeting! {{$user->name}}
{{$repository->title}}
@component('mail::panel')
{{$repository["description"]}}
@endcomponent
@component('mail::table')

| Scienfitic Information       | Table         |
| ------------- |:-------------:|
| scientificName      | {{$repository["scientificName"]}}      |
| commonName      | {{$repository["commonName"]}} |
| localName      | {{$repository["localName"]}} |
| latitude      | {{$repository["latitude"]}} |
| longitude      | {{$repository["longitude"]}} |
| altitude      | {{$repository["altitude"]}} |
| distribution      | {{$repository["distribution"]->name}} |
| family      | {{$repository["family"]->name}} |
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
