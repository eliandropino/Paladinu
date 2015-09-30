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

//rota inicial sem login
Route::get('/', function () {
    return view('layout.login');
});

//rota incial logado
Route::get('home',['as'=>'home', function () {
    return view('layout.layout');
}]);



//rotas para funcionarios
Route::group(['prefix' => 'funcionario','as'=>'funcionario.'], function () {
    Route::get('/',['as' => 'index', 'uses' => 'FuncionarioController@index']);
    Route::get('novo', ['as' => 'novo', 'uses' => 'FuncionarioController@novo']);
    Route::get('remover', ['as' => 'remover', 'uses' => 'FuncionarioController@remover']);
    Route::get('editar/{id}', ['as' => 'editar', 'uses' => 'FuncionarioController@editar']);
    Route::post('criar', ['as' => 'criar', 'uses' => 'FuncionarioController@criar']);
    Route::post('criarFuncao', ['as' => 'criarFuncao', 'uses' => 'FuncionarioController@criarFuncao']);
    Route::put('update/{id}', ['as' => 'update', 'uses' => 'FuncionarioController@update']);
});

//rotas para produtos
Route::group(['prefix' => 'produto','as'=>'produto.'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'ProdutoController@index']);
    Route::get('funcao', ['as' => 'funcao', 'uses' => 'FuncionarioController@funcao']);
    Route::get('remover', ['as' => 'remover', 'uses' => 'FuncionarioController@remover']);
    Route::get('editar', ['as' => 'editar', 'uses' => 'FuncionarioController@editar']);
    Route::post('criar', ['as' => 'crari', 'uses' => 'FuncionarioController@criar']);
    Route::post('criarFuncao', ['as' => 'criarFuncao', 'uses' => 'FuncionarioController@criarFuncao']);
});

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//dd(route('funcionario.index'));