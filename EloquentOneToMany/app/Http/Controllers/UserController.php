<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('post')->get();
        // $users = User::doesntHave("post")->get();
        // $users = User::has("post", ">=", 3)->with('post')->get();
        // $users = User::withCount("post")->get();
        // $users = User::select(['name', 'email'])->withCount('post')->get();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = new Post([
            'title' => 'News Title - Test',
            'description' => 'Just Testing...'
        ]); 

        $user = User::find();
        $user->post()->save($post);

        //Second Method 

        $user->post()->create([
            'title' => 'News Title - Test',
            'description' => 'Just Testing'
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
