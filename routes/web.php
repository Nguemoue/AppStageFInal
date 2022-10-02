<?php

use App\Http\Controllers\HomeController;
use App\Mail\testMail;
use Faker\Factory;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Events\SendLocation;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\UniteController;
use App\Http\Controllers\PersonnelController;

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

Route::post("/flog", [HomeController::class, "store_flog"])->name("post.first.login");

Route::get('/', [HomeController::class, "index"])->name("home");

Route::get("/home", [HomeController::class, "home"])->name("index");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/personnels/list',[PersonnelController::class,"list"])->name("personnels.list");
    //Route::resource("courier",\App\Http\Controllers\CourierController::class);
    Route::get("/materiel", [MaterielController::class, "index"])->name("materiel.index");
    Route::get("/elements", [PersonnelController::class, "index"])->name("element.index");
    Route::get("/unite", [UniteController::class, "index"])->name("unite.index");
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource("garde_vue", \App\Http\Controllers\GardeVueController::class);
    Route::resource("service",\App\Http\Controllers\ServiceController::class);

    Route::group([
        "prefix"=>"dashboard/",
    ],function (){
        Route::get("chat", \App\Http\Livewire\Chat::class)->name('chat.index');
        Route::get("notifications", \App\Http\Livewire\NotificationLivewire::class)->name('notification.index');
        Route::get("/courier",\App\Http\Livewire\CourierLivewire::class)->name("courier.index");
    }) ;
});

Route::get('/d',function(){
   return redirect()->route("test")->with('success',"Bienvenue sur notre page web");
});
Route::get('/test', function () {
    return view("test");
})->name("test");

