<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::GET('/', [usercontroller::class,'home'])->name('user.index');
Route::GET('/servies',[usercontroller::class,'services'])->name('user.services');
Route::GET('/process',[usercontroller::class,'process'])->name('user.process');
Route::GET('/aboutus',[usercontroller::class,'about'])->name('user.about');
Route::GET('/contactus',[usercontroller::class,'contact_us'])->name('user.contact');
Route::GET('/terms',[usercontroller::class,'terms'])->name('user.terms');
Route::GET('/privacy',[usercontroller::class,'privacy'])->name('user.privacy');
