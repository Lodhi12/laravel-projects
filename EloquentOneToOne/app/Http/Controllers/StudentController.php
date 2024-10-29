<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Contact;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::with('contact')->get(); //comes in json format
        $students = Student::where('gender', 'F')->withWhereHas('contact', function($query){
            $query->where('city', 'Karachi');
        })->get();
        return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = Student::create([
            'name' => "Shahrukh",
            'age' => 50,
            'gender' => 'M'
        ]);

        $student->contact()->create([
            'email' => 'shahrukh@gmail.com',
            'phone' => '3224567362',
            'address' => '#123 Nooriabad',
            'city' => 'Nathiagali',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
