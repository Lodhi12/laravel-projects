<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AttendanceDetail;

class AttendanceController extends Controller
{
    // public function filter(Request $request)
    // {
    //     // Retrieve the selected month, year, and user_id from the request, default to current month, year, and all users if not provided
    //     $month = $request->input('month', now()->month);  // Default to the current month
    //     $year = $request->input('year', now()->year);     // Default to the current year
    //     $userId = $request->input('user_id');             // Get the selected user ID

    //     // Fetch all users, excluding user with id = 1
    //     $users = User::where('id', '!=', 1)->get();

    //     // Initialize query for filtered attendance details
    //     $query = AttendanceDetail::with(['attendance', 'attendanceStatus', 'user'])
    //         ->whereHas('user', function ($query) use ($userId) {
    //             if ($userId) {
    //                 // If a specific user is selected, filter by user ID
    //                 $query->where('id', $userId);
    //             } else {
    //                 // Exclude user with id = 1 for all users
    //                 $query->where('id', '!=', 1);
    //             }
    //         });

    //     // Apply filters based on the selected (or default) month and year
    //     $query->whereHas('attendance', function ($query) use ($month, $year) {
    //         $query->whereMonth('date', $month)
    //             ->whereYear('date', $year);  // Always filter by the year as well
    //     });

    //     // Get the filtered attendance details
    //     $filteredAttendanceDetails = $query->get();

    //     // Fetch the selected user for displaying their full name
    //     $selectedUser = $userId ? User::find($userId) : null;

    //     // Return to the view with data (users and filtered attendance details)
    //     return view('attendances', compact('users', 'filteredAttendanceDetails', 'selectedUser', 'month', 'year'));
    // }

    public function getDistinctMonths(Request $request){
        $months = Attendance::select(DB::raw('MONTH(date) as month'))
        ->distinct()
        ->orderBy('month')
        ->pluck('month');

        return $months;
    }

    public function filter()
    {
        $months = $this->getDistinctMonths();
        return view('attendances', compact('months'));
    }
}

