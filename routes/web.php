<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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


Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/konto/edytuj/{id}', [App\Http\Controllers\KontoController::class, 'edit'])->name('users.konto');
Route::put('/home/konto/zamien/{id}', [App\Http\Controllers\KontoController::class, 'update'])->name('user.update');
Route::get('/cennik/list', [App\Http\Controllers\ZnajdzCennikController::class, 'index'])->name('user.znajdz_cennik');




Route::get('pdfview',array('as'=>'pdfview','uses'=>'BestInterviewQuestionController@pdfview'));



Auth::routes();
    Route::prefix('admin')->group(function ()
    {
        Route::get('/login', 'App\Http\Controllers\Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
        Route::post('/login', 'App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.login.submit');
        Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



        Route::get('/cennik/list', [App\Http\Controllers\CennikController::class, 'index'])->name('cennik.cennik');
        Route::post('/cennik/list/zapisz', [App\Http\Controllers\CennikController::class, 'store'])->name('cennik.store');
        Route::get('/cennik/list/edytuj/{id}', [App\Http\Controllers\CennikController::class, 'edit'])->name('cennik.edit');
        Route::put('/cennik/list/zmien/{id}', [App\Http\Controllers\CennikController::class, 'update'])->name('cennik.update');
        Route::get('/cennik/list/usun/{id}', [App\Http\Controllers\CennikController::class, 'delete'])->name('cennik.delete');


        Route::get('/użytkownicy/list', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
        Route::post('/użytkownicy/list/zapisz', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
        Route::get('/użytkownicy/list/edytuj/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
        Route::put('/użytkownicy/list/zmien/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
        Route::get('/użytkownicy/list/usun/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('users.delete');



        Route::get('/zwierzeta/list', [App\Http\Controllers\ZwierzeController::class, 'index'])->name('zwierzes.index');
        Route::post('/zwierzeta/list/zapisz', [App\Http\Controllers\ZwierzeController::class, 'store'])->name('zwierzes.store');
        Route::get('/zwierzeta/list/edytuj/{id}', [App\Http\Controllers\ZwierzeController::class, 'edit'])->name('zwierzes.edit');
        Route::put('/zwierzeta/list/zmien/{id}', [App\Http\Controllers\ZwierzeController::class, 'update'])->name('zwierzes.update');
        Route::get('/zwierzeta/list/usun/{id}', [App\Http\Controllers\ZwierzeController::class, 'delete'])->name('zwierzes.delete');

    });

