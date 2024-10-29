@extends('layout')

@section('title')
    All Users Data
@endsection

@section('content')
    <a href="{{ route ('user.create') }}" class="btn btn-success btn-sm mb-3">Add New</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
                <th>View</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->city }}</td>
                    <td><a href="{{ route ('user.show', $user->id) }}" class="btn btn-primary btn-sm">View</a></td>
                    <td>
                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                    <td><a href="{{ route ('user.show', $user->id) }}" class="btn btn-warning btn-sm">Update</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $users->links() }}
    </div>
@endsection