<?php

use App\Http\Controllers\HomeController;
use App\Mail\testMail;
use Faker\Factory;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get("/flog", [HomeController::class, "first_login"])->name("first.login");
Route::post("/flog",[HomeController::class,"store_flog"])->name("post.first.login");

Route::get('/', function () {
    return view("index");
})->name("home");


Route::get("/te", function () {
    Mail::to("lucchuala@gmail.com")->send(new testMail);
    dd("de");
});

Route::view("test", "test")->name("test");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
