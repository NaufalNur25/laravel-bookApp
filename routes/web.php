<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

Route::get('home/detail/{post:slug}', [PostController::class, 'show']);

Route::get('tools/{title}', [PostController::class, 'create']);
Route::post('tools/add/execute', [PostController::class, 'store'])->name('add');

Route::get('tools/edit/{post:id}', [PostController::class, 'edit']);
Route::post('tools/edit/execute/{post:id}', [PostController::class, 'update']);
Route::get('tools/{post:id}/delete', [PostController::class, 'destroy'])->name('tools.delete');

Route::get('tools/{title}', [CategoryController::class, 'create']);
Route::post('tools/addCategory/execute', [CategoryController::class, 'store'])->name('addCategory');
