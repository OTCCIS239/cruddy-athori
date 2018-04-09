<?php

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

// Route::get('/', function () {
//     return view('pages.home');
// });
// Route::get('/', 'HomeControlle'(){
//     return view('/');
// })->name('home');
$id=1;
Route::get('/', function(){
    return view('home.index');
})->name('home');
// Route::resource('/', 'HomeController');
Route::resource('artists', 'ArtistsController');
Route::resource('events', 'EventsController');
Route::resource('users', 'UsersController');
Route::resource('venues', 'VenuesController');
Route::resource('tickets', 'TicketsController');

Route::get('artists/artist', function(){

})->name('artist');