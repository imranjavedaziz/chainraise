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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['as' => 'auth.', 'prefix' => 'auth', 'namespace' => 'App\Http\Controllers\Api'], function () {
    Route::post('login',            ['as' => 'user.login', 'uses' => 'UserController@login']);
    Route::post('register',         ['as' => 'user.register', 'uses' => 'UserController@register']);
  //  Route::post('password-forgot',  ['as' => 'user.password.forgot', 'uses' => 'NewPasswordController@forgotPassword']);
   // Route::post('validate-token',   ['as' => 'user.password.token.validation', 'uses' => 'NewPasswordController@validateToken']);
   // Route::post('new-password',   ['as' => 'user.password.reset', 'uses' => 'NewPasswordController@setNewPassword']);
});
Route::group(['as' => 'user.', 'prefix' => 'users', 'namespace' => 'App\Http\Controllers\Api'], function () {
    Route::get('investors', ['as' => 'investors', 'uses' => 'UserController@investors']);
    Route::post('investors', ['as' => 'investor.create', 'uses' => 'UserController@investor_create']);
    Route::get('issuer/create', ['as' => 'issuer.create', 'uses' => 'UserController@issuer']);
    Route::post('investor/save', ['as' => 'save', 'uses' => 'UserController@save']);
    Route::post('issuer/save', ['as' => 'save', 'uses' => 'UserController@save']);
    /// Route::get('issuer', ['as' => 'create.issuer','uses' => 'UserController@create']);
    Route::get('profile', ['as' => 'profile', 'uses' => 'UserController@profile']);
    Route::get('list', ['as' => 'list', 'uses' => 'UserController@list']);
    Route::post('update', ['as' => 'update', 'uses' => 'UserController@update']);
    Route::post('delete', ['as' => 'delete', 'uses' => 'UserController@delete']);
});
Route::group(['as' => 'organizations.', 'prefix' => 'organizations', 'namespace' => 'App\Http\Controllers\Api'], function () {
    Route::get('listing', ['as' => 'index', 'uses' => 'OrganizationController@index']);
    Route::get('listing/{id}', ['as' => 'offers.edit', 'uses' => 'OrganizationController@singleOrganization']);
    Route::get('{id}/offers', ['as' => 'offers', 'uses' => 'OrganizationController@OrganizationOffers']);
});
Route::group(['as' => 'offers.', 'prefix' => 'offers', 'namespace' => 'App\Http\Controllers\Api'], function () {
    Route::get('listing', ['as' => 'offers', 'uses' => 'OfferController@index']);
    Route::get('listing/{id}', ['as' => 'offers.edit', 'uses' => 'OfferController@singleOffer']);
});