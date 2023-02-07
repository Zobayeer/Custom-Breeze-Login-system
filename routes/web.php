<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

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

//admin All controller
Route::controller(AdminController::class)->group(function (){
    Route::get('/admin_logout', 'destroy')->name('admin_logout');
    Route::get('/admin_profile', 'profile')->name('admin_profile');
    Route::get('/edit_Profile', 'editProfile')->name('editProfile');
    Route::post('/Store_Profile', 'StoreProfile')->name('Store_Profile');
    Route::get('/change_password', 'changePassword')->name('change_password');
    Route::post('/update_password', 'updatePassword')->name('update_password');
});




Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
