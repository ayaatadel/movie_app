<?php

use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use Illuminate\Routing\Route as RoutingRoute;

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
    return view('welcome');
});
Route::get('index', [MoviesController::class, 'index'])->name('movie.index');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movie.show');

// Route::get('/movies/{movie}', 'MoviesController@show')->name('movie.show');
// Route::get('index', function () {
//     return view('index');
// });
Route::get("show", function () {
    return view('layouts.show');
});
// Route::get('profile', function () {
//     return view('index');
// });
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
