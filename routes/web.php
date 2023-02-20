<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'The company itself is a very successful company. He will criticize the very least and that 
                which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! 
                Expedite from the pursuit is held to be lenient?'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'The company itself is a very successful company. He will criticize the very least and that 
                which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! 
                Expedite from the pursuit is held to be lenient?'
            ]
        ]
    ]);
});
