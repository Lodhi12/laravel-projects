<h1>Header page</h1>

<p>{{$name}}</p>

@foreach ($names as $name)
    <p>{{$name}}</p>
@endforeach


@foreach ($names as $key => $value)
    <p>{{$key}} - {{$value}}</p>
@endforeach

@forelse ($names as $key => $value)
    <p>{{$key}} - {{$value}}</p>
@empty
    <p>No value found.</p>
@endforelse