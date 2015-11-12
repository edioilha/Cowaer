<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login.login');
});

Route::group(array('prefix' => 'panel-control'),function(){

/*-------------------------------------------------------------------------------------
| As duas rotas abaixo são acessiveis apenas para quem é administrador
--------------------------------------------------------------------------------------*/
	// Route::controller('/admin','AdminController');
	
	Route::controller('/dashboard', "DashboardController");
	Route::controller('/fazenda', "FazendaController");
	// Route::controller('/historico','HistoricoController');


});