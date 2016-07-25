<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome',['title'=>'Proteje tus metales']);
});
Route::get('/producto', function () {
    return view('producto',['title'=>'Producto']);
});
Route::get('/producto2', function () {
    return view('producto2',['title'=>'Producto2']);
});
Route::get('/contacto', function () {
    return view('contacto',['title'=>'Contacto']);
});
Route::get('/puntos-de-venta', function () {
    return view('puntosdeventa',['title'=>'Puntos de venta']);
});
