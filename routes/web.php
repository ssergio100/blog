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

Route::resource('/painel/produtos','Painel\ProdutoController');
//Route::group(['namespace'=>'site'],function(){
    Route::get('/','SiteController@index');
    Route::get('/contato','Site\SiteController@contato');
    Route::get('/categoria/{id}','Site\SiteController@categoria');
    Route::get('painel/users','Painel\PainelController@getUsers');
//});


//
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::get('/home', function () {
//    return view('home');
//});
//
//Route::get('/categoria/{id?}',function($id=null){
//    //return view('categoria');
//    return $id;
//});
//
//Route::group(['prefix'=>'painel'],function(){
//
//    Route::get('/grupo1',function(){
//
//        return 'grupo1';
//    });
//
//    Route::get('/grupo2',function(){
//
//        return 'grupo2';
//    });
//
//    Route::get('/',function(){
//
//        return 'Dashboard';
//    });
//});