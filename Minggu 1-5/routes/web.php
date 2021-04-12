<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RizkyramaController;
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

Route::get('/hello', function(){
    return 'Hello World';
});

Route::get('/belajar', function(){
    echo '<h1> Hello World </h1>';
    echo '<p>Sedang Belajar Laravel</P>';
});

Route::get('page/{nomor}', function($nomor){
    return 'Ini halaman ke-' .$nomor;
});  

Route::get('/MYFAMILY', function () {
    return view('gambar');
});

Route::get('/WELCOME', function () {
    return view('WELCOME');
});

Route::get('/namaku', function () {
    return view('namaku');
});

//Route::get('user', 'RizkyramaController@index');

//Route::resource('user', 'RizkyramaController');

Route::get('user', [RizkyramaController::class, 'index']);

Route::resource('user', RizkyramaController::class);

Route::get('/Rizkyrama', function () {
    return view('Rizkyrama');
});

//Route::resource('home', [HomeController::class, 'index']);
Route::resource('home', HomeController::class);

//Route::resource('dashboard', [DashboardController::class, 'index']);
Route::resource('dashboard', DashboardController::class);