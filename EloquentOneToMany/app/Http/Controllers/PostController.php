<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        // $posts = Post::with('user')->where('title', 'News Title Two')->get();

        // $posts = Post::withWhereHas('user', function($query){
        //        $query->where()
        // })->get();

        // $users = User::where('name', 'Salman Khan')->get();
        // $posts = Post::whereBelongsTo($users)->get();
        return $posts;

        // echo $posts->title . "<br>";
        // echo $posts->description . "<br>";
        // echo $posts->user->name . "<br>";

        foreach($posts as $post){
            echo "<div style = 'border':1px solid red; margin:0 0 10px'>
                    <h3>$post->title</h3>
                    <span>{$post->user->name}</span>
                    <p>$post->description</p>
                </div>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
