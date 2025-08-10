<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/about', function () {

    $data1 = "About us - Online Store";

    $data2 = "About us";

    $description = "This is an about page ...";

    $author = "Developed by: Miguel Ángel Cano Salinas";

    return view('home.about')->with("title", $data1)

        ->with("subtitle", $data2)

        ->with("description", $description)

        ->with("author", $author);

})->name("home.about");

Route::get('/contact', function () {
    $email = "salinitas@rappi.com";
    $address = "Calle 44B Norte #84-44";
    $phone = "+57 3244654565";
    return view('home.contact', compact('email', 'address', 'phone'));
})->name("home.contact");