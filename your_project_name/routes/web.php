<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/post', function () {
    return view('post');
    //return "<h1>Post Page</h1>"; 2nd way to render html on the page
});

//2nd way to create a route

//Route::view('/post', 'post'); //first route ka naam aur second view ka naam

// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });

Route::get('/post/{id}', function (string $id = null) {
    if($id){
        return "<h1>Post Id: ".$id."</h2>";
    }
    else{
        return "<h1>No id found</h1>";
    }
});

Route::get('/post/{id}', function (string $id = null) {
    if($id){
        return "<h1>Post Id: ".$id."</h2>";
    }
    else{
        return "<h1>No id found</h1>";
    }
})->whereNumber('id');

Route::get('/post/{id}/comment/{commentid?}', function (string $id = null, string $comment = null) { //optional ki waja se null kia hai
    if($id){
        return "<h1>Post Id: ".$id."</h1>".$comment . "</h2>";
    }
    else{
        return "<h1>No id found</h1>";
    }
});

Route::get('/about', function(){
    return view("about");
})->name("myabout"); //helps when u want to rename a route and then u will have to rename it from everywhere


Route::redirect('/about', '/test', 301); //permanent redirect

Route::fallback(function (){
    return "<h1>Page not found.</h2>";
});

Route::get('/test', function() {
    return view('test');
});

Route::get('/users', function() {
    return view('users', ['user' => "Ammar Lodhi", 'city'=>"Delhi", 'Greet' => '<script>alert("Hello");</script>']);
    // return view('users')->with('user', $name)->with('city', 'Delhi');
    // return view('users')->withUser('user', $name)->with('city', 'Delhi');
});

Route::get('/users1', function() {
    $names = [
        1 => ['name' => 'Ammar', 'phone'=> '03357065335', 'city' => 'Karachi'],
        2 => ['name' => 'Lodhi', 'phone'=> '03357065335', 'city' => 'Hyderabad'],
        3 => ['name' => 'Aoun', 'phone'=> '03357065335', 'city' => 'Sukkur'],
        4 => ['name' => 'Raza', 'phone'=> '03357065335', 'city' => 'Montreal'],
        5 => ['name' => 'Senty', 'phone'=> '03357065335', 'city' => 'Faisalabad'],
    ];
    return view('users1', [
        'user' => $names,
        'city' => 'Karachi'
    ]);

});

Route::get('/user2/{id}', function($id) {
    return "<h1>User: ". $id . "</h1>";
})->name('view.user2');

Route::get('/home2', function() {
    return view('welcome2');
});

Route::get('/user2', [PageController::class, 'showUser'])->name('user');
Route::get('/', [PageController::class, 'showHome'])->name('home');
Route::get('/blog', [PageController::class, 'showBlog'])->name('blog');
