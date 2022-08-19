<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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
    return view('login');
});

Route::get('/login',function(){return view('login');})->name('login');
Route::get('/cadastro-trabalhador', 'AppController@CadTrabalhador')->name('cadastro-trabalhador');
Route::post('gravar-cadastro', 'AppController@gravarCadastro')->name('gravar-cadastro');
Route::get('/home', 'AppController@index')->name('home')->middleware('auth');



//Assistidos Rotas
Route::get('assistidos', 'PessoaController@assistidos')->name('assistidos')->middleware('auth');
Route::get('assistidos/adicionar', 'PessoaController@create')->name('assistidos.adicionar')->middleware('auth');
Route::post('assistido/salvar', 'PessoaController@store')->name('assistido.salvar')->middleware('auth');
Route::get('assistido/{id}/editar', 'PessoaController@edit')->name('assistido.editar')->middleware('auth');
Route::post('assistido/update', 'PessoaController@update')->name('assistido.update')->middleware('auth');



Route::post('pessoa/excluir', 'PessoaController@destroy')->name('pessoa.excluir')->middleware('auth');

//LOGIN ROTAS
Route::post('/login/do', 'AuthController@Login')->name('login.do');
Route::get('logout', 'AuthController@Logout')->name('logout')->middleware('auth');

//User Rotas
Route::get('usuarios', 'UserController@index')->name('usuarios')->middleware('auth');
Route::get('usuarios/adicionar', 'UserController@create')->name('usuarios.adicionar')->middleware('auth');
Route::post('usuario/salvar', 'UserController@store')->name('usuario.salvar')->middleware('auth');
Route::get('usuario/{id}/editar', 'UserController@edit')->name('usuario.editar')->middleware('auth');
Route::post('usuario/update', 'UserController@update')->name('usuario.update')->middleware('auth');
Route::post('usuario/excluir', 'UserController@destroy')->name('usuario.excluir')->middleware('auth');
