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

Route::get('/', function(){
  return view('welcome');
});

Route::resource('pizzas', 'PizzaController');
// pizza routes
Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create'); 
Route::post('/pizzas', 'PizzaController@store')->name('pizzas.show');
Route::get('/pizzas/{id}', 'PizzaController@show')->middleware('auth')->name('pizzas.show');
Route::delete('/pizzas/{id}', 'PizzasController@destroy')->middleware('auth')->name('pizzas.destroy');

Auth::routes([
  'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
