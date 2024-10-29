<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('id', '!=', 1)->simplePaginate(5);
        return view('tables', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms-input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|alpha',
            'email' => 'required|email',
            'emp_id' => 'required|numeric',
        ]);

        $randomPassword = Str::random(10);

        User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'emp_id' => $request->emp_id,
            'password' => $randomPassword,
        ]);

        return redirect()->route('user.index')->with('status', 'New User Added Successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->emp_id = $request->emp_id;

        $user->save();

        return redirect()->route('user.index')->with('status', 'User Data Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('status', 'User Data Deleted Successfully!');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }

        else{
            return redirect()->route('login')->with('error', 'Email or password is incorrect');
        }
    }

    public function homePage(){
        if (Auth::check()) {
            return view('index');
        }
        else{
            return redirect()->route('login');
        }
    }
}
