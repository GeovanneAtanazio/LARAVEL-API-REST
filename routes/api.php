<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* EndPoint(Rota) de Login */
Route::post('auth/login', 'Api\AuthController@login')->name('login');
/* EndPoints(Rotas) acessadas por usuários logados */
Route::group(['middleware'=>['apiJWT']], function (){
    /* EndPoints(Rotas) da seção do usuario */
    Route::group(['prefix' => 'auth'], function (){
        /* EndPoint(Rota) que traz as informações */
        Route::post('me', 'Api\AuthController@me')->name('me');
        /* EndPoint(Rota) que atualiza o token */
        Route::post('refresh', 'Api\AuthController@refresh');
        /* EndPoint(Rota) que faz o logout*/
        Route::post('logout', 'Api\AuthController@logout');
    });
    /* EndPoint(Rota) que lista todos os usuarios */
    Route::get('users','Api\UserController@index');
});
