<?php

use App\Models\Hotel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hotelcontroller;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/hotel', function () {
    $items = Hotel::all();
    return view('hotel',[
        'items' => $items
    ]);
});

Route::get('/add', [Hotelcontroller::class, 'create']);
Route::post('/add', [Hotelcontroller::class, 'store']);

Route::get('/detail/{id}', [Hotelcontroller::class, 'show']);

Route::get('/edit/{id}', [Hotelcontroller::class, 'edit']);
Route::post('/update/{id}', [Hotelcontroller::class, 'update']);

Route::get('/delete/{id}', [Hotelcontroller::class, 'destroy']);
