<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']); // Hash the password

        $lastEmpId = User::max('emp_id'); // Get the last emp_id in the database
        $data['emp_id'] = str_pad(($lastEmpId ? $lastEmpId + 1 : 1), 5, '0', STR_PAD_LEFT); // Pad with leading zeros

        $user = User::create($data);

        if($user){
            return redirect()->route('login');
        }
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){ //agr login krdia hai tou attemp use hota
            return redirect()->route('dashboard');
        }
    }
    public function dashboardPage(){
        if(Auth::check()){ //agr user login hai tou check use hota, agr user login hai tbhi is page ko dekh skta hai
            return view('dashboard');
        }
        else{
            return redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }

    public function innerPage(){
        if(Auth::check()){
            return view('inner');
        }
        else{
            return redirect()->route('login');
        }
    }
}
