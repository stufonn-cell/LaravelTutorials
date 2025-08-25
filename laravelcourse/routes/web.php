<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')
    ->name('home.index');

Route::get('/about', function () {
    $data1 = 'About us - Online Store';
    $data2 = 'About us';
    $description = 'This is an about page ...';
    $author = 'Developed by: Miguel Ángel Cano Salinas';

    return view('home.about')->with('title', $data1)
        ->with('subtitle', $data2)
        ->with('description', $description)
        ->with('author', $author);
})->name('home.about');

Route::get('/contact', function () {
    $email = 'salinitas@rappi.com';
    $address = 'Calle 44B Norte #84-44';
    $phone = '+57 3244654565';

    return view('home.contact', compact('email', 'address', 'phone'));
})->name('home.contact');

Route::get('/products', 'App\Http\Controllers\ProductController@index')
    ->name('product.index');

Route::get('/products/create', 'App\Http\Controllers\ProductController@create')
    ->name('product.create');

Route::post('/products/save', 'App\Http\Controllers\ProductController@save')
    ->name('product.save');

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')
    ->name('product.show');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');

Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');

Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name('cart.removeAll');
