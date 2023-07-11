<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


///https://www.youtube.com/watch?v=ncufsZBCAz4

Route::middleware(["auth"])->group(function() {
    Route::get("/dashboard", function () {
        return redirect("/dashboard/blogs");
    })->name("dashboard");

    Route::get("/dashboard/users", function () {
        return view("dashboard.users.main", [
            "title" => "Users"
        ]);
    });

    Route::get("/dashboard/blogs", function () {
        return view("dashboard.blogs.main", [
            "title" => "Blogs"
        ]);
    });
});

Route::middleware(["web"])->group(function () {
    Route::get("/", [HomeController::class, "home"]);
    Route::get("/login", [AuthController::class, "loginView"])->name("login");
    // Route::get("{blogUrl}", [HomeController::class, "getByUrl"]);
});




Route::any('tesing' , function (){


    // User::where('id' , 1)->update([
    //     'password'=>Hash::make('123456789'),
    // ]);

//    $user= User::insert([
//         'name'=>'mohamed ibrahim',
//         'email'=>'mohamedzayed521@gmail.com',
//         'password'=>Hash::make('123456789'),
//     ]);


    // return $user;



});