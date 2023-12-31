<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix'=>'api'],function(){
Route::apiResource('/marcas', 'MarcaController');
Route::apiResource('/medidas', 'MedidaController');
Route::apiResource('/categorias', 'CategoriaController');
Route::apiResource('/documentos', 'DocumentoController');
Route::apiResource('/articulos', 'ArticuloController');
Route::get('/inventarios/kardex/{articulo}', 'InventarioController@kardex');
Route::apiResource('/inventarios', 'InventarioController');
Route::apiResource('/compras', 'CompraController');
Route::apiResource('/ventas', 'VentaController');
});

Route::get('/', function () {
    return view('welcome');
});
