<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(BackendController::class)->group(function(){
    Route::get('/role','role')->name('user-role');
    Route::get('/permission','permission')->name('user-permission');
    Route::get('/user','user')->name('user');
});

Route::controller(RoleController::class)->group(function(){
    Route::post('/rolepost','rolepost')->name('rolepost');
});
Route::controller(PermissionController::class)->group(function(){
    Route::post('/permissionpost','permissionpost')->name('permissionpost');
});
Route::controller(UserController::class)->group(function(){
    Route::post('/userpost','userpost')->name('userpost');
    Route::post('/userstatus/{id}','userstatus')->name('userstatus');
});
Route::get('/register', [RegistrationController::class, 'showForm'])->name('register');
Route::post('/registerpost', [RegistrationController::class, 'registerpost'])->name('registerpost');

Route::controller(LoginController::class)->group(function(){
Route::get('/login',  'showLoginForm')->name('login');
Route::post('/loginpost',  'loginpost');
Route::post('/logout', 'logout')->name('logout');
});
Route::controller(PostController::class)->group(function(){
    Route::get('/',  'post')->name('post');
    Route::get('/addpost',  'addpost')->name('addpost');
    Route::post('/poststore',  'poststore')->name('poststore');
   
    });

Route::get('/dashboard', function () {
    return 'Welcome to your dashboard!';
})->middleware('auth');

Route::fallback(function(){
    return view('404');
});
