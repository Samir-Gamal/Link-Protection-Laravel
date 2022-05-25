<?php

use App\Http\Controllers\CheckPasswordController;
use Illuminate\Support\Facades\Gate;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/users', function () {

    if (Gate::allows('check_password')) {
        abort(403);
    }
    return view('users');

})->name('users');

Route::get('create_password',[CheckPasswordController::class,'createPassword'])->name('create.password');
Route::post('update_password',[CheckPasswordController::class,'updatePassword'])->name('update.password');

Route::get('/posts', function () {
    return view('posts');
})->name('posts');



require __DIR__.'/auth.php';
