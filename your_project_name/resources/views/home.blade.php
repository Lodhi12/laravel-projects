@php
    $fruits = ["Apple", "Banana", "Orange", "Grapes"];
    $fruits1 = ["one" => "Apple", "two" => "Banana", "three" => "Orange", "four" => "Grapes"];
@endphp

@include('pages.header', ['name' => 'Yahoo Baba'])

<h1>Home page</h1>

@include('pages.footer')

@includeif('pages.content') <!-- Checks if this kind of view file exists -->

@includeWhen() <!-- Checks for the condition's boolean value if true then include the file -->

@includeUnless() <!-- If condition is false then includes the file -->