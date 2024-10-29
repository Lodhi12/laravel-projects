<h1>This is the users page</h1>

<h2>Hello {{ $user }}</h2>

<h3>City: {{ $city }}</h3>

<h4>City: {!! $city !!}</h4>

<h5>City: {{ !empty($city) ? $city : "No City" }}</h5>