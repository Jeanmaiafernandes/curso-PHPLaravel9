<?php

use  Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return "Olá, seja bem vindo ao curso";
});
*/

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'SobreNos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'Contato'])->name("site.contato");

Route::get('/login', function(){  return 'Login'; })->name('site.login');



  Route::prefix('/app')->group(function() {

    Route::get('/clientes', function() { return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function() { return 'Produtos'; })->name('app.produtos');

  });


Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');


Route::fallback(function (){
    echo 'A rota acessada não existe. <a href= .route (" site.index ")."<a/>clique aqui</a> para ir para página inicial';

});


/* Verb http

get
post
put
patch
delete
options

*/
