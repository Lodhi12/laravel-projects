<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all(); //Not want to show all records, below is the pagination
        $users = User::simplepaginate(5); //code is in the home page
        // $users = User::count(); //for counting the number of records in the database
        // $users = User::min('age'); //for calculating the minimum of the age
        // $users = User::max('age'); //for calculating the maximum of the age
        // $users = User::sum('age'); //for calculating the sum of the age
        // $users = User::find(2); //For finding a specific record
        // $users = User::whereCity('Sialkot')->get(); // directly use the column name with the where clause
        // $users = User::find([2, 4], ['name', 'email']); //for finding a specific record, returns an array and not json
        // $users = User::where('city', 'Murree')->get(); //Used for finding records of a specific city
        // $users = User::whereCity('Sukkur')->whereAge(20)->select('name', 'email as User Email')->ddRawSql();
        // $users = User::whereCity('Quetta')->first(); //only fetch the first record
        // $users = User::where('Age', '<>', 20)->get();
        // $users = User::whereNot('Age', 20)->get();
        // $users = User::whereBetween('Age', [20, 22])->get();
        // $users = User::whereNotInBetween('Age', [20, 22])->get();
        // $users = User::whereIn('city', ['Karachi', 'Lahore'])->get();
        // $users = User::where([['city', 'Karachi'],['age', '>', 20]])->get(); //Used for multiple conditions
        // return $users;
        return view('home', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //first method of inserting into the database

        // $user = new User;

        // $user->name = $request->username;
        // $user->email = $request->useremail;
        // $user->age = $request->userage;
        // $user->city = $request->usercity;

        // $user->save();

        //second method of inserting into the database
        //only works when u unlock this method

        $request->validate([
            'username' => 'required|alpha',
            'useremail' => 'required|email',
            'userage' => 'required|numeric',
            'usercity' => 'required|alpha'
        ]);

        User::create([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'city' => $request->usercity,
        ]);

        return redirect()->route('user.index')->with('status', 'New User Added Successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::find($id);
        return view('viewuser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::find($id);
        return view('updateuser'. compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //form ki request aarahi hai request naam ke variable ke andar

        //First method of updating records

        // $user = User::find($id);

        // $user->name = $request->username;
        // $user->email = $request->useremail;
        // $user->age = $request->userage;
        // $user->city = $request->usercity;

        // $user->save();

        //form ko update krne se pehle validation krni hogi

        $request->validate([
            'username' => 'required|alpha',
            'useremail' => 'required|email',
            'userage' => 'required|numeric',
            'usercity' => 'required|alpha'
        ]);

        //Second method of updating records (Mass update)

        $user = User::where('id', $id)->update([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'city' => $request->usercity
        ]);

        return redirect()->route('user.index')->with('status', 'User Data Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // First method of deleting a record, famous method

        $user = User::find($id);
        $user->delete($id);

        // Second method of deleting a user

        // User::destroy($id); //we can pass multiple ids
        // User::destroy(8, 9); // deleting from multiple ids

        // User::truncate(); //Deleting the whole users table and resetting the ids, good for delete all button

        return redirect()->route('user.index')->with('status', 'User Data Deleted Successfully!');
    }
}
