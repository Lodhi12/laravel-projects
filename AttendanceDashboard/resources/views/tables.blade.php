@extends('layout.masterlayout')
@section('tables-title')All Users @endsection

@section('tables-content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Bordered Table -->
              <div class="card">
                <h5 class="card-header">All Users List</h5>
                <a href="{{ route('user.create') }}" class="card-header">Add New</a>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Employee Id</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td><strong>{{ $user->full_name }}</strong></td> <!-- Full name -->
                                        <td>{{ $user->email }}</td> <!-- Email -->
                                        <td>{{ $user->emp_id }}</td> <!-- Employee ID -->
                                        <td>{{ $user->created_at->format('Y-m-d') }}</td> <!-- Created At -->
                                        <td>{{ $user->updated_at->format('Y-m-d') }}</td> <!-- Updated At -->
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <!-- Edit button with dynamic user ID -->
                                                    <a class="dropdown-item" href="{{ route('user.edit', $user->id) }}">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </a>
                                                    <!-- Delete button with dynamic user ID and confirmation -->
                                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit" class="dropdown-item">
                                                          <i class="bx bx-trash me-1"></i> Delete
                                                      </button>
                                                    </form>
                                                    <a class="dropdown-item" href="{{ route('attendance.filter', ['user_id' => $user->id]) }}">
                                                      <i class="bi bi-eye"></i> Show Attendance
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
            
                        <!-- Pagination Links -->
                        {{ $users->links() }}
                    </div>
                </div>
              </div>
            
              <!--/ Bordered Table -->

              <hr class="my-5" />

              
            @endsection
