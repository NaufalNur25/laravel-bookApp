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

// Route::get('categories', function(){
//     return view('categories', [
//         'categories' => Category::all()
//     ]);
// });


Route::get('home', [PostController::class, 'index'])->name('home.index');

Route::get('home/{post}/delete', [PostController::class, 'destroy']);
Route::get('detail/{post:slug}', [PostController::class, 'show']);

Route::get('add', [PostController::class, 'create']);
Route::post('add/execute', [PostController::class, 'store']);

Route::get('edit/{post:id}', [PostController::class, 'edit']);
Route::post('edit/execute/{post:id}', [PostController::class, 'update']);
