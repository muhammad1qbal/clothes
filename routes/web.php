<?php

use App\Http\Controllers\LaptopController;
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

// Route::get('/', function () {
//     return view('home', [
//         "name" => "Clothes"
//     ]);
// });

Route::get('/', [LaptopController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/detail', function() {
    return view('detail');
});
