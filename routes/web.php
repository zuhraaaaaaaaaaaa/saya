<?php
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

Route::get('/', function () {
    return view('home', [
        'title' => 'LANDING HOME PAGE',
        'name'  => 'BELAJAR LARAVEL APPLICATION NEWS ',
    ]);
});

Route::get('/About', function () {
    return view('About', [
        'title' => 'Welcome to About',
        'name'  => 'BELAJAR LARAVEL APPLICATION NEWS ',
    ]);
});

Route::get('/Contact', function () {
    return view('Contact', [
        'title' => 'Welcome to Contact',
        'name'  => 'BELAJAR LARAVEL APPLICATION NEWS ',
    ]);
});

Route::resource('/posts',PostController::class);
