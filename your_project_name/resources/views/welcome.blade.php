<h1>Hello World</h1>
<a href="/post">Post Page</a><br>
<a href="/about">About Page</a><br>

{{ 5+2 }}

<!--
    <a href="/post">Post Page</a><br>
    <a href="{{route ("myabout")}}">About Page</a> //named routes are useful
-->
    <br><br>

    {{ "Hello World "}}<br>
    {!! "<h1>Hello World</h1>" !!}
    {!! '<script>window.alert("I am your doom!!!")</script>' !!}
<!-- {{-- Comment section --}} 
php ka code following way mein likhte 
-->

@php
    $user = "Ammar Lodhi";
@endphp

{{ $user }}

@php
    $names = ["Ammar Lodhi", "Aoun Raza", "Uzair Taufeeq"]
    $user = "Ammar";
@endphp

<ul>
    @foreach ($names as $name)
        <li> {{$n}}</li>
    @endforeach
</ul>

@{{$user}}

@@if()

<ul>
    @foreach ($names as $name)
        <li> {{$loop->index}} - {{$n}}</li>
    @endforeach
</ul>

<ul>
    @foreach ($names as $name)
        <li> {{$loop->iteration}} - {{$n}}</li>
    @endforeach
</ul>

<ul>
    @foreach ($names as $name)
        <li> {{$loop->count}} - {{$n}}</li>
    @endforeach
</ul>

<ul>
    @foreach ($names as $name)
        @if ($loop->first)
            <li style="color: red;"> {{$loop->count}} - {{$n}}</li>
        @else
            <li>{{$n}}</li>
        @endif
    @endforeach
</ul>

<ul>
    @foreach ($names as $name)
        @if ($loop->first)
            <li style="color: red;"> {{$loop->count}} - {{$n}}</li>
        @elseif($loop->last)
            <li style="color: green">{{$n}}</li>
        @else
            <li>{{$n}}</li>
        @endif
    @endforeach
</ul>

<ul>
    @foreach ($names as $name)
        @if ($loop->even)
            <li style="color: red;"> {{$loop->count}} - {{$n}}</li>
        @elseif($loop->odd)
            <li style="color: green">{{$n}}</li>
        @endif
    @endforeach
</ul>

{{-- @extends('layouts.masterlayout') 
    layout uthalega layouts ke folder mein masterlayouts se
    teeno mein extend krdena hai i.e about, post waghera jismein bhi use krwana ho tou

    @section('content')
        content daaldou
    @endsection
--}}

@push('scripts')
    <script src="/example.js"></script>
@endpush

@prepend('style')
    <style>
        #wrapper{
            background-color: tan;
        }
    </style>
@endprepend