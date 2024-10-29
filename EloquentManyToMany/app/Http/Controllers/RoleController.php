<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = Role::find(1);
        return $role->users; // users function use kr rahay jo User model mein defined hai
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $user = User::find(5);
        // $user->roles()->attach();

        // $user = User::find(5);
        // $role = [1, 3];
        // $user->roles()->attach($roles);

        // $user->roles()->detach(3);

        // $user->roles()->sync($roles);

        $role = Role::find(2);
        $user_id = [1, 3];
        $role->users()->sync($user_id);
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
