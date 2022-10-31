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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['as'=> 'role.','prefix'=>'roles','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\Role'], function () {
    Route::get('index', ['as' => 'index','uses' => 'RoleController@index']);
    Route::post('create', ['as' => 'save','uses' => 'RoleController@save']);
});


Route::group(['as'=> 'user.','prefix'=>'users','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\User'], function () {
    Route::get('index', ['as' => 'index','uses' => 'UserController@index']);
    Route::get('details/{id}', ['as' => 'details','uses' => 'UserController@details']);
    Route::post('accountUpdate', ['as' => 'account.update','uses' => 'UserController@accountUpdate']);

    Route::get('investor/create', ['as' => 'investor.create','uses' => 'UserController@investor']);
    Route::get('issuer/create', ['as' => 'issuer.create','uses' => 'UserController@issuer']);
    Route::post('investor/save', ['as' => 'save','uses' => 'UserController@save']);
    Route::post('issuer/save', ['as' => 'save','uses' => 'UserController@save']);
   /// Route::get('issuer', ['as' => 'create.issuer','uses' => 'UserController@create']);
    Route::get('profile', ['as' => 'profile','uses' => 'UserController@profile']);
    Route::get('list', ['as' => 'list','uses' => 'UserController@list']);
    Route::post('update', ['as' => 'update','uses' => 'UserController@update']);
    Route::post('delete', ['as' => 'delete','uses' => 'UserController@delete']);
});



Route::group(['as'=> 'offers.','prefix'=>'offers','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\Offers'], function () {
    Route::get('listing', ['as' => 'index','uses' => 'OfferController@index']);
    Route::get('list', ['as' => 'list','uses' => 'OfferController@list']);
    Route::post('create', ['as' => 'create','uses' => 'OfferController@create']);
    Route::post('delete', ['as' => 'delete','uses' => 'OfferController@delete']);
    Route::get('edit/{id}', ['as' => 'edit','uses' => 'OfferController@edit']);
    Route::post('update', ['as' => 'update','uses' => 'OfferController@update']);
});



Route::group(['as'=> 'organizations.','prefix' => 'organizations','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\Organizations'], function () {
    Route::get('listing', ['as' => 'index','uses' => 'OrganizationsController@index']);
    Route::post('create', ['as' => 'create','uses' => 'OrganizationsController@create']);
    Route::get('list', ['as' => 'list','uses' => 'OfferController@list']);
    Route::post('update', ['as' => 'update','uses' => 'OrganizationsController@update']);
    Route::post('delete', ['as' => 'delete','uses' => 'OrganizationsController@delete']);
});




require __DIR__.'/auth.php';
