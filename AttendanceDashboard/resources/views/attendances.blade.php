@extends('layout.masterlayout')
@section('attendance-title')
    Attendances
@endsection
@section('attendance-content')
@php
    use Carbon\Carbon;
@endphp

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Attendance</h5>
            <div class="d-flex align-items-center">
                <!-- Dropdown to select a user -->
                <div class="dropdown me-3">
                    @php
                        // Get the selected user from the request or default to null
                        $selectedUserId = request('user_id');
                        $selectedUser = $users->where('id', $selectedUserId)->first();
                        $selectedUserName = $selectedUser ? $selectedUser->full_name : 'Select A User';
                    @endphp
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $selectedUserName }}  <!-- Display selected user or default text -->
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('attendance.filter', ['user_id' => null, 'month' => request('month'), 'year' => request('year')]) }}">
                                Show All
                            </a>
                        </li>
                        @foreach ($users as $user)
                            <li>
                                <a class="dropdown-item" href="{{ route('attendance.filter', ['user_id' => $user->id, 'month' => request('month'), 'year' => request('year')]) }}">
                                    {{ $user->full_name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Dropdown to select a month (unchanged) -->
                <div class="dropdown me-3">
                    @php
                        $selectedMonth = request('month');
                        $monthName = $selectedMonth ? Carbon::create()->month($selectedMonth)->format('F') : 'Select A Month';
                    @endphp
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $monthName }}
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('attendance.filter', ['month' => null, 'year' => request('year'), 'user_id' => request('user_id')]) }}">
                                Show All
                            </a>
                        </li>
                        @foreach (range(1, 12) as $month)
                            <li>
                                <a class="dropdown-item" href="{{ route('attendance.filter', ['month' => $month, 'year' => request('year'), 'user_id' => request('user_id')]) }}">
                                    {{ \Carbon\Carbon::create()->month($month)->format('F') }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Dropdown to select a year (unchanged) -->
                <div class="dropdown">
                    @php
                        $selectedYear = request('year', now()->year);
                    @endphp
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $selectedYear }}
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('attendance.filter', ['month' => request('month'), 'year' => null, 'user_id' => request('user_id')]) }}">
                                Show All
                            </a>
                        </li>
                        @foreach (range(now()->year, now()->year + 10) as $year)
                            <li>
                                <a class="dropdown-item" href="{{ route('attendance.filter', ['year' => $year, 'month' => request('month'), 'user_id' => request('user_id')]) }}">
                                    {{ $year }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Attendance Table (unchanged) -->
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Employee Id</th>
                            <th>Attendance Status</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($filteredAttendanceDetails as $attendanceDetail)
                            @if($attendanceDetail->attendance->is_holiday)
                                <tr class="table-secondary">
                                    <td colspan="6" class="text-center">
                                        <span class="text-muted">
                                            {{ Carbon::parse($attendanceDetail->attendance->date)->format('j F, Y') }},
                                            {{ $attendanceDetail->attendance->reason }}
                                        </span>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td>{{ Carbon::parse($attendanceDetail->attendance->date)->format('j F, Y') }}</td>
                                    <td><strong>{{ $attendanceDetail->user->full_name }}</strong></td>
                                    <td>{{ $attendanceDetail->user->email }}</td>
                                    <td>{{ $attendanceDetail->user->emp_id }}</td>
                                    <td>
                                        @if($attendanceDetail->attendanceStatus->attendance_status === 'Present')
                                            <span class="badge bg-label-success me-1">{{ $attendanceDetail->attendanceStatus->attendance_status }}</span>
                                        @elseif($attendanceDetail->attendanceStatus->attendance_status === 'Absent')
                                            <span class="badge bg-label-danger me-1">{{ $attendanceDetail->attendanceStatus->attendance_status }}</span>
                                        @elseif($attendanceDetail->attendanceStatus->attendance_status === 'Late')
                                            <span class="badge bg-label-warning me-1">{{ $attendanceDetail->attendanceStatus->attendance_status }}</span>
                                        @elseif($attendanceDetail->attendanceStatus->attendance_status === 'Leave')
                                            <span class="badge bg-label-info me-1">{{ $attendanceDetail->attendanceStatus->attendance_status }}</span>
                                        @elseif($attendanceDetail->attendanceStatus->attendance_status === 'Leave W.I')
                                            <span class="badge bg-label-dark me-1">{{ $attendanceDetail->attendanceStatus->attendance_status }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $attendanceDetail->attendance->updated_at->format('Y-m-d') }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination Links (if necessary) -->
                {{-- {{ $filteredAttendanceDetails->links() }} --}}
            </div>
        </div>
    </div>
</div>

@endsection
