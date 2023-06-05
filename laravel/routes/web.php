<?php

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


use App\Exports\UsersExport;
use App\Exports\ComentariosExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/paquetes', 'HomeController@paquetes')->name('paquetes');
Route::get('/wiki', 'HomeController@wiki')->name('home');
Route::post('/contacto', 'HomeController@sendComentario')->name('home');
Route::post('/ciudades', 'HomeController@ciudades')->name('ciudades');

Route::get('users/export/', 'HomeController@export');

Route::get('/download/App/Models/{model}',function($model){
    switch ($model){
      case 'Comentario':
      return Excel::download(new ComentariosExport, 'comentarios.xlsx');
      break;
    }
  });



Route::group(['prefix' => 'admTemplate'], function () {
  Voyager::routes();
});
