<?php

use App\Http\Controllers\ComicController;
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
    return view('index');
});

// rotta pagina principale dei fumetti
Route::get('/comics', 'ComicController@index')->name('comics.index');
// rotta pagina per creare un nuovo fumetto
Route::get('/comics/create' , 'ComicController@create')->name('comics.create');
// rotta per visualizzare un singolo fumetto
Route::get('/comics/{comic}', 'ComicController@show')->name('comics.show');

Route::get('/comics/{comic}/edit' , 'ComicController@edit')->name("comics.edit");
Route::patch('/comics/{comic}' , 'ComicController@update')->name('comics.update');


Route::delete('/comics/{comic}' , 'ComicController@destroy')->name('comics.destroy');


// rotta per salvare i nuovi fumetti inseriti
Route::Post('/comics', 'ComicController@store')->name('comics.store');

