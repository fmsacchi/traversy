<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// all listings
Route::get('/', function () {
    return view('listings',[
        'heading' => 'Lastest Listing',
        'listings' => Listing::all()
    ]);
});
// single listing
Route::get('/listings/{id}', function ($id) {
    return view('listing',[
        'listing' => Listing::find($id)
    ]);
});
