<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PhoneManyController;

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

Route::get('one-to-one/users', [UserController::class, 'oneToOne'])->name('oneToOneUsers');
Route::get('one-to-one/phones', PhoneController::class)->name('oneToOnePhones');

Route::get('one-to-many/users', [UserController::class, 'oneToMany'])->name('oneToManyUsers');
Route::get('one-to-many/phones', PhoneManyController::class)->name('oneToManyPhones');

Route::get('many-to-many/users', [UserController::class, 'manyToMany'])->name('manyToManyUsers');
Route::get('many-to-many/hobbies', HobbyController::class)->name('manyToManyHobbies');

require __DIR__ . '/auth.php';
