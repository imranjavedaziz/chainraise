<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\MakeInvestmentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\UserController;
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

Route::get('view-email-1', [TestController::class, 'email_signup']);
Route::get('view-email-2', [TestController::class, 'email_signup_2']);
Route::get('upload-doc', [TestController::class, 'upload_doc']);
Route::get('dummer', [UserController::class, 'dummy'])->name('dummer');
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('error.logs');
Route::get('custom_login/{email}/{password}', [UserController::class, 'custom_login']);
Route::get('redirect-user/{email}/{password}', [UserController::class, 'redirection']);

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('otp', [GeneralController::class, 'otp'])->name('otp');

Route::get('offer/{id}/details', [FrontendController::class, 'detail'])->name('offer.details');
 
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['as'=> 'invest.','prefix'=>'invest','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers'], function () {
    Route::get('make', ['as' => 'make','uses' => 'MakeInvestmentController@make']);
    Route::post('submit', ['as' => 'submit','uses' => 'MakeInvestmentController@submitInvestment']);
    Route::get('details/{id}', ['as' => 'detail','uses' => 'MakeInvestmentController@detail']);
    Route::post('submit-kyc', ['as' => 'kyc.submit','uses' => 'MakeInvestmentController@kycSubmit']);
    Route::get('verify-identity', ['as' => 'verify.identity','uses' => 'MakeInvestmentController@verify_identity']);
    Route::get('investment-limits', ['as' => 'investment.limits','uses' => 'MakeInvestmentController@investment_limits']);
    Route::get('payment-method', ['as' => 'payment.method','uses' => 'MakeInvestmentController@payment_method']);
    Route::get('connect-bank', ['as' => 'connect.bank','uses' => 'MakeInvestmentController@connect_bank']);
    Route::get('sign-subscription', ['as' => 'sign.subscription','uses' => 'MakeInvestmentController@sign_subscription']);
});
Route::get('login', function () {
    return view('auth.login');
});
Route::get('login-test', function () {
    return view('auth.login_test');
});
Route::get('db2', function () {
    return view('layouts.dashboard-issuer');
});
Route::group(['as'=> 'role.','prefix'=>'roles','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\Role'], function () {
    Route::get('index', ['as' => 'index','uses' => 'RoleController@index']);
    Route::post('create', ['as' => 'save','uses' => 'RoleController@save']);
});

Route::group(['as'=> 'payment.','prefix'=>'users','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers'], function () {
    Route::post('ach', ['as' => 'ach','uses' => 'PaymentController@ach']);
});
Route::group(['as'=> 'user.','prefix'=>'users','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\User'], function () {
    Route::get('index', ['as' => 'index','uses' => 'UserController@index']);
    Route::get('get-childs', ['as' => 'childs','uses' => 'UserController@getChilds']);
    Route::get('details/{id}', ['as' => 'details','uses' => 'UserController@details']);
    Route::post('accountUpdate', ['as' => 'issuer.account.update','uses' => 'UserController@issuerAccountUpdate']);
    Route::get('investor/create', ['as' => 'investor.create','uses' => 'UserController@investor']);
    Route::get('issuer/create', ['as' => 'issuer.create','uses' => 'UserController@issuer']);
    Route::post('investor/save', ['as' => 'save','uses' => 'UserController@save']);
    Route::post('issuer/save', ['as' => 'save','uses' => 'UserController@save']);
   /// Route::get('issuer', ['as' => 'create.issuer','uses' => 'UserController@create']);
    Route::get('profile', ['as' => 'profile','uses' => 'UserController@profile']);
    Route::get('list', ['as' => 'list','uses' => 'UserController@list']);
    Route::post('update', ['as' => 'update','uses' => 'UserController@update']);
    Route::post('delete', ['as' => 'delete','uses' => 'UserController@delete']);
    Route::post('save', ['as' => 'child.save','uses' => 'UserController@childSave']);
    Route::post('get-child-details', ['as' => 'child.details','uses' => 'UserController@childDetails']);
    Route::post('update-child', ['as' => 'child.update','uses' => 'UserController@childUpdate']);
    Route::post('invesment/update', ['as' => 'invesment.update','uses' => 'UserController@invesmentUpdate']);
    Route::post('delete-child', ['as' => 'child.delete','uses' => 'UserController@childUDelete']);
    /// KYC Checking
    Route::post('check/kyc', ['as' => 'kyc.check','uses' => 'KycController@checkKyc']);
    Route::post('check/kyc/level', ['as' => 're.run.kyc.level','uses' => 'KycController@re_run_kyc']);
    Route::post('re/run/kyc', ['as' => 'kyc.re.run','uses' => 'KycController@re_run_kyc']);
    Route::post('kyc/document/update', ['as' => 'kyc.document.update','uses' => 'KycController@kycDocumentUpoad']);
    

});

Route::group(['as'=> 'accreditation.','accreditation'=>'users','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\Accreditation'], function () {
    Route::post('update', ['as' => 'update','uses' => 'accreditationController@update']);
});

Route::group(['as'=> 'offers.','prefix'=>'offers','middleware' => ['auth','verified','role:admin|investor'],'namespace'=>'App\Http\Controllers\Offers'], function () {
    Route::get('active/listing', ['as' => 'active.index','uses' => 'OfferController@active_index']);
    Route::get('inactive/listing', ['as' => 'inactive.index','uses' => 'OfferController@inactive_index']);
    Route::get('create', ['as' => 'create','uses' => 'OfferController@create']);
    Route::get('list', ['as' => 'list','uses' => 'OfferController@list']);
    Route::post('save', ['as' => 'save','uses' => 'OfferController@save']);
    Route::post('delete', ['as' => 'delete','uses' => 'OfferController@delete']);
    Route::get('edit/{id}', ['as' => 'edit','uses' => 'OfferController@edit']);
    Route::get('view/{id}', ['as' => 'view','uses' => 'OfferController@view']);
    Route::post('update', ['as' => 'update','uses' => 'OfferController@update']);
    Route::post('check/custodial', ['as' => 'check.custodial','uses' => 'OfferController@checkCustodial']);
});

Route::group(['as'=> 'organizations.','prefix' => 'organizations','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\Organizations'], function () {
    Route::get('listing', ['as' => 'index','uses' => 'OrganizationsController@index']);
    Route::post('create', ['as' => 'create','uses' => 'OrganizationsController@create']);
   // Route::get('list', ['as' => 'list','uses' => 'OfferController@list']);
    Route::post('update', ['as' => 'update','uses' => 'OrganizationsController@update']);
    Route::post('delete', ['as' => 'delete','uses' => 'OrganizationsController@delete']);
});

Route::group(['as'=> 'folder.','prefix'=>'folder','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\Folder'], function () {
    Route::post('create', ['as' => 'create','uses' => 'FolderController@create']);
    Route::post('upload-file', ['as' => 'upload.file','uses' => 'FolderController@uploadFile']);
    Route::get('get-files', ['as' => 'get.files','uses' => 'FolderController@getFiles']);
});


require __DIR__.'/auth.php';
