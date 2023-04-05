<?php

use App\Exports\UsersExport;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\MakeInvestmentController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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
//----


Route::get('ki', [TestController::class, 'mailTrap'])->name('king2');


Route::get('flow-chart', [TestController::class, 'flow_chart'])->name('flow_chart');
Route::get('mailTrap', [TestController::class, 'mailTrap'])->name('mailTrap');
Route::get('message', [TestController::class, 'message'])->name('messss');
Route::post('message-sent', [TestController::class, 'message_send']);
Route::get('view-email-1', [TestController::class, 'email_signup']);
Route::get('view-email-2', [TestController::class, 'email_signup_2']);
Route::get('upload-doc', [TestController::class, 'upload_doc']);
Route::get('dummer', [UserController::class, 'dummy'])->name('dummer');
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('error.logs');
Route::get('custom_login/{email}/{password}', [UserController::class, 'custom_login']);
Route::get('redirect-user/{email}/{password}', [UserController::class, 'redirection']); 
Route::get('privacy-policy', [FrontendController::class, 'privacy_policy'])->name('privacy.policy'); 
Route::get('investors', [FrontendController::class, 'investors'])->name('investors');
Route::get('businesses', [FrontendController::class, 'businesses'])->name('businesses');

Route::get('faq', [FrontendController::class, 'faq'])->name('faq'); 
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/', [FrontendController::class, 'index'])->name('index');

Route::get('login-social', [FrontendController::class, 'socialLogin'])->name('login.social');
Route::get('otp', [GeneralController::class, 'otp'])->name('otp');

Route::get('login/google', [App\Http\Controllers\SocialiteController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\SocialiteController::class, 'handleGoogleCallback']);


Route::get('login/google', [App\Http\Controllers\SocialiteController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\SocialiteController::class, 'handleGoogleCallback']);

Route::get('login/facebook', [App\Http\Controllers\SocialiteController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\SocialiteController::class, 'handleFacebookCallback']);


Route::get('offer/{id}', [FrontendController::class, 'detail'])->name('offer.details');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Investor Dashbaord

Route::group(['as'=> 'invest.','prefix'=>'investor','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\Investor'], function () {
    Route::get('/dashboard', ['as' => 'make','uses' => 'InvestorController@dashbaord']);
});

Route::group(['as'=> 'invest.','prefix'=>'invest','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers'], function () {
    Route::get('make', ['as' => 'make','uses' => 'MakeInvestmentController@make']);
    Route::get('submit', ['as' => 'submit','uses' => 'MakeInvestmentController@submitInvestment']);
    Route::get('step/two', ['as' => 'step.two','uses' => 'MakeInvestmentController@step_two']);
    Route::get('check/kyc', ['as' => 'check.kyc','uses' => 'MakeInvestmentController@kyc_checking']);
    Route::get('step/three', ['as' => 'step.three','uses' => 'MakeInvestmentController@step_three']);
    Route::get('step/four', ['as' => 'step.four','uses' => 'MakeInvestmentController@step_four']);
    Route::get('step/five', ['as' => 'step.five','uses' => 'MakeInvestmentController@step_five']);
    Route::get('step/six/e/template', ['as' => 'step.six.e.template','uses' => 'MakeInvestmentController@e_template']);
    Route::post('save', ['as' => 'save','uses' => 'MakeInvestmentController@save']);


    Route::get('details/{id}', ['as' => 'detail','uses' => 'MakeInvestmentController@detail']);
    Route::post('submit-kyc', ['as' => 'kyc.submit','uses' => 'MakeInvestmentController@kycSubmit']);
    Route::get('verify-identity', ['as' => 'verify.identity','uses' => 'MakeInvestmentController@verify_identity']);
    Route::get('investment-limits', ['as' => 'investment.limits','uses' => 'MakeInvestmentController@investment_limits']);
    Route::get('payment-method', ['as' => 'payment.method','uses' => 'MakeInvestmentController@payment_method']);
    Route::get('connect-bank', ['as' => 'connect.bank','uses' => 'MakeInvestmentController@connect_bank']);
    Route::get('sign-subscription', ['as' => 'sign.subscription','uses' => 'MakeInvestmentController@sign_subscription']);
    Route::post('get.template', ['as' => 'get.template','uses' => 'MakeInvestmentController@getTemplate']);
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
    Route::get('account', ['as' => 'account','uses' => 'UserController@account']);
    Route::get('esign-template', ['as' => 'esign.template','uses' => 'UserController@template']);
    Route::post('esign-template-save', ['as' => 'esign.template.save','uses' => 'UserController@templateSave']);
    Route::get('kyc/check/update/{id}', ['as' => 'update.kyc.check','uses' => 'KycController@updateKycCheck']);

    //Front Listing Page
    /// Added new roure
    Route::post('esign-template-save', ['as' => 'esign.template.save','uses' => 'UserController@templateSave']);
    Route::post('basic/details/update', ['as' => 'basic.details.update','uses' => 'UserController@basicDetailUpdate']);

});

Route::group(['as'=> 'user.info.','prefix'=>'users/info','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\User'], function () {
    Route::post('update/trust/setting', ['as' => 'update.trust.setting','uses' => 'UpdateBasicDetailController@update_trust_settings']);
    Route::post('upload/document', ['as' => 'update.document','uses' => 'UpdateBasicDetailController@updateDocument']);
    Route::post('e/document', ['as' => 'e.document','uses' => 'UpdateBasicDetailController@eDocument']);
    Route::post('invite/email', ['as' => 'invite.email','uses' => 'UpdateBasicDetailController@inviteEmail']);
    Route::get('csv', ['as' => 'csv','uses' => 'UpdateBasicDetailController@exportCSV']);
    Route::get('export-csv', ['as' => 'csv','uses' => 'UpdateBasicDetailController@export']);
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
    Route::get('tile/delete', ['as' => 'tile.delete','uses' => 'OfferController@deleteTile']);
    Route::get('video/delete', ['as' => 'video.delete','uses' => 'OfferController@deleteVideo']);
    Route::get('edit/{id}', ['as' => 'edit','uses' => 'OfferController@edit']);
    Route::get('view/{id}', ['as' => 'view','uses' => 'OfferController@view']);
    Route::post('update', ['as' => 'update','uses' => 'OfferController@update']);
    Route::post('check/custodial', ['as' => 'check.custodial','uses' => 'OfferController@checkCustodial']);
    Route::get('policy', ['as' => 'policy','uses' => 'OfferController@policy']);
    Route::post('policy/create', ['as' => 'policy.create','uses' => 'OfferController@policyCreate']);
    Route::post('policy/delete', ['as' => 'policy.delete','uses' => 'OfferController@policyDelete']);
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

Route::group(['as'=> 'transaction.','prefix'=>'transaction','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\Transaction'], function () {
    Route::get('transaction', ['as' => 'index','uses' => 'TransactionController@index']);
});

Route::group(['as'=> 'engagments.','prefix'=>'engagments','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\Engagment'], function () {
    Route::get('', ['as' => 'index','uses' => 'EngagmentController@index']);
});



require __DIR__.'/auth.php';
