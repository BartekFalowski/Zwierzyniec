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
Route::get('/relacje/list', [App\Http\Controllers\ZnajdzRelacjeController::class, 'index'])->name('user.znajdz_relacje');
Route::get('/home/Bilet/Lista', [App\Http\Controllers\Bilet_listaController::class, 'index'])->name('user.lista_bilet');



Route::get('pdfview',array('as'=>'pdfview','uses'=>'BestInterviewQuestionController@pdfview'));



Auth::routes();
    Route::prefix('admin')->group(function ()
    {
        Route::get('/login', 'App\Http\Controllers\Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
        Route::post('/login', 'App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.login.submit');
        Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



        Route::get('/konduktor/list', [App\Http\Controllers\KonduktorController::class, 'index'])->name('konduktor.konduktor');
        Route::post('/konduktor/list/zapisz', [App\Http\Controllers\KonduktorController::class, 'store'])->name('konduktor.store');
        Route::get('/konduktor/list/edytuj/{id}', [App\Http\Controllers\KonduktorController::class, 'edit'])->name('konduktor.edit');
        Route::put('/konduktor/list/zmien/{id}', [App\Http\Controllers\KonduktorController::class, 'update'])->name('konduktor.update');
        Route::get('/konduktor/list/usun/{id}', [App\Http\Controllers\KonduktorController::class, 'delete'])->name('konduktor.delete');


        Route::get('/relacje/list', [App\Http\Controllers\RelacjaController::class, 'index'])->name('relacje.relacje');
        Route::post('/relacje/list/zapisz', [App\Http\Controllers\RelacjaController::class, 'store'])->name('relacje.store');
        Route::get('/relacje/list/edytuj/{id}', [App\Http\Controllers\RelacjaController::class, 'edit'])->name('relacje.edit');
        Route::put('/relacje/list/zmien/{id}', [App\Http\Controllers\RelacjaController::class, 'update'])->name('relacje.update');
        Route::get('/relacje/list/usun/{id}', [App\Http\Controllers\RelacjaController::class, 'delete'])->name('relacje.delete');


        Route::get('/użytkownicy/list', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
        Route::post('/użytkownicy/list/zapisz', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
        Route::get('/użytkownicy/list/edytuj/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
        Route::put('/użytkownicy/list/zmien/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
        Route::get('/użytkownicy/list/usun/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('users.delete');

    });

