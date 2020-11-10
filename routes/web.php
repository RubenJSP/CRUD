<?php
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
    return view('welcome');
});
Route::get('/suma/{n1}/{n2}',"WebController@suma")->where(array('n1' => '[0-9]+','n2' => '[0-9]+'));
/*Route::get('/suma/{n1?}/{n2?}', function ($n1=0,$n2=0) {
    echo 'El resultado es '.($n1+$n2);

})->where(array('n1' => '[0-9]+','n1' => '[0-9]+'));*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/books', 'BookController@index')->name('Books');
    Route::get('/categories', 'CategoryController@index')->name('Categories'); 
    Route::post('/categories','CategoryController@store');
});
