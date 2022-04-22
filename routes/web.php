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
/*
Route::get('/', function () {
    return "Olá, seja bem vindo ao curso";
});
*/

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;


Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [SobreNosController::class, 'SobreNos']);

Route::get('/contato', [ContatoController::class, 'Contato']);

Route::get('/login', function(){  return "Login"; });

Route::get('/clientes', function() { return "Clientes"; });

Route::get('/fornecedores', function() { return "Fornecedores"; });

Route::get('/produtos', function() { return "Produtos"; });





/* verbo http

get
post
put
patch
delete
options

*/
