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

Route::get('', function () {
    return redirect('/home');
});

Route::get('detail', function () {
    return view('detail');
});

Route::get('edit', function () {
    return view('edit');
});

Route::get('tambah', [PostController::class, 'create']);

Route::get('categories', function(){
    return view('categories', [
        'categories' => Category::all()
    ]);
});


Route::get('home', [PostController::class, 'index']);
Route::get('home/{post}', [PostController::class, 'destroy']);
Route::get('detail/{post:slug}', [PostController::class, 'show']);
Route::get('tambah', [PostController::class, 'create']);
Route::post('tambah/execute', [PostController::class, 'store']);
