<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/nama', function (){
    echo "berhasil";
})->middleware('Middleware1');
Route::get('/home', function(Request $r){
    echo "</h1>token salah</h1>";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('form', function () {
    return view('form');
});

Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);

require __DIR__.'/auth.php';
