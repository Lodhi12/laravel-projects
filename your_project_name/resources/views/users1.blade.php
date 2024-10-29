@foreach ($user as $id => $u)
    <h3>{{ $u['name'] }} | {{ $u['phone'] }} | {{ $u['city'] }}</h3>
        <a href=" {{ route('view.user2') }}">Show</a>
@endforeach