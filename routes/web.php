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

Route::get('/', function () {
    return view('');
});

// DASHBOARD ROUTE
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/loginpost','AuthController@loginpost');
// Route::get('/register','AuthController@register');
// Route::post('/registerPost','AuthController@registerPost');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:sales']],function(){

	// SALES ACTIVITIES ROUTE
	Route::get('/sales-activities', 'MarketingController@salesActivities');
	Route::get('/sales-activities/create', 'MarketingController@salesActivitiesAddView');
	Route::get('/salesAdd/edit{id}', 'MarketingController@salesAddEdit');
	Route::post('/salesAddUpdate', 'MarketingController@updateDetailSales');

	// SALES ACTIVITIES MODAL POP UP ROUTE
	Route::post('/salesActivitiesModal', 'MarketingController@salesActivitiesAddModal'); //tambah baru
	Route::post('/salesActivitiesModalAdd', 'MarketingController@salesActivitiesAddModalEdit'); 

	// tambah edit baru detail
	Route::get('/salesActivitiesModal/delete{id}', 'MarketingController@salesActivitiesAddDelete');
	Route::get('/salesActivitiesModalALL/delete{id}', 'MarketingController@salesActivitiesAddDeleteALL');
	Route::get('/salesDetail/{id}/edit',   'MarketingController@editSales');
	Route::post('/salesEditDetail/update', 'MarketingController@updateDetailSales');
	Route::get('/salessearch', 'MarketingController@search');

	//ROUTE AKSES SELECT2
	Route::get('/caricustomer','MarketingController@caricustomer');
	Route::get('/carikapal', 'MarketingController@carikapal');
	Route::get('/carislipway', 'MarketingController@carislipway');
	Route::get('/caritipeslipway', 'MarketingController@caritipeslipway');
	Route::get('/caritipekapal', 'MarketingController@caritipekapal');
	Route::get('/carisales', 'MarketingController@carisales');
	Route::get('/cariwork', 'MarketingController@cariwork');

	// MASTER SHIPS 
	Route::get('/shipyard', 'ShipController@ship');
	Route::get('/shipyard/create', 'ShipController@shipadd');
	Route::post('/shipyardAdd','ShipController@shipyardAdd');
	Route::get('/shipyardAdd/edit{id}', 'ShipController@shipyardAddEdit');
	Route::post('/shipyardAdd/update', 'ShipController@shipyardAddUpdate');
	Route::get('/shipyardAdd/delete{id}', 'ShipController@shipyardAddDelete');
	Route::get('/shipyardSearch', 'ShipController@shipyardAddSearch');

	// MASTER SHIP TYPES
	Route::get('/shiptype','ShiptypeController@index');
	Route::get('/shiptype/create', 'ShiptypeController@create');
	Route::post('/shiptypeAdd', 'ShiptypeController@store');
	Route::get('/shiptypeEdit{id}', 'ShiptypeController@edit');
	Route::post('/shiptypeUpdate', 'ShiptypeController@update');
	Route::get('/shiptype/delete{id}', 'ShiptypeController@destroy');
	Route::get('/shiptypeSearch', 'ShiptypeController@search');

	// MASTER CUSTOMER
	Route::get('/customer', 'CustomerController@index');
	Route::get('/customer/create', 'CustomerController@add');
	Route::post('/customerAdd', 'CustomerController@addpost');
	Route::get('/customer/edit{id}', 'CustomerController@edit');
	Route::post('/customer/update', 'CustomerController@update');
	Route::get('/customer/delete{id}', 'CustomerController@delete');
	Route::get('/customerSearch', 'CustomerController@search');

	//MASTER SLIPWAY
	Route::get('/slipway', 'SlipwayController@index');
	Route::get('/slipway/create', 'SlipwayController@create');
	Route::post('/slipwayAdd','SlipwayController@store');
	Route::get('/slipway/edit{id}', 'SlipwayController@edit');
	Route::post('/slipway/update', 'SlipwayController@update');
	Route::get('/slipway/delete{id}', 'SlipwayController@delete');
	Route::get('/slipwaySearch', 'SlipwayController@search');

	//MASTER SLIPWAYTYPE
	Route::get('/slipwaytype', 'SlipwaytypeController@index');
	Route::get('/slipwaytype/create', 'SlipwaytypeController@create');
	Route::post('/slipwaytypeAdd','SlipwaytypeController@store');
	Route::get('/slipwaytype/edit{id}', 'SlipwaytypeController@edit');
	Route::post('/slipwaytype/update', 'SlipwaytypeController@update');
	Route::get('/slipwaytype/delete{id}', 'SlipwaytypeController@delete');
	Route::get('/slipwaytypeSearch', 'SlipwaytypeController@search');
});
	
Route::group(['middleware' => ['auth','checkRole:admin,sales']],function(){

	Route::get('/home','DashboardController@index');

});

Route::group(['middleware' => ['auth','checkRole:admin']],function(){

	//MASTER ACCOUNT
	Route::get('/user','UserController@index');
	Route::get('/user/create', 'UserController@create');
	Route::post('/userAdd','UserController@add');
	Route::get('/user/edit{id}', 'UserController@edit');
	Route::post('/user/update', 'UserController@update');
	Route::get('/user/delete{id}', 'UserController@delete');
	Route::get('/userSearch', 'UserController@search');

});