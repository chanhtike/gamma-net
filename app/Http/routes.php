<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});
Route::get('pricing', function () {
    return view('pricing');
});
Route::get('about', function () {
    return view('about');
});
Route::get('services', function () {
    return view('services');
});
Route::get('item', function () {
    return view('item');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('reg-page', function () {
    return view('reg-page');
});
Route::get('shopping', function () {
    return view('shopping');
});
Route::get('login-page', function () {
    return view('login-page');
});
Route::get('product-list', function () {
    return view('product-list');
});
Route::get('confirm', function () {
    return view('confirm');
});
Route::get('success', function () {
    return view('success');
});
Route::get('member-home', function () {
    return view('member-home');
});
Route::get('PassForBalance', function () {
    return view('PassForBalance');
});
Route::get('cash-balance', function () {
    return view('cash-balance');
});
Route::get('level-graph', function () {
    return view('level-graph');
});
Route::get('cash-in', function () {
    return view('cash-in');
});
Route::get('cash-in-success', function () {
    return view('cash-in-success');
});
Route::get('cash-out', function () {
    return view('cash-out');
});
Route::get('cash-out-success', function () {
    return view('cash-out-success');
});
Route::get('remit', function () {
    return view('remit');
});
Route::get('remit-confirm', function () {
    return view('remit-confirm');
});
Route::get('remit-success', function () {
    return view('remit-success');
});
Route::get('user-guide', function () {
    return view('user-guide');
});
Route::get('ac-settings', function () {
    return view('ac-settings');
});
Route::get('member-topup', function () {
    return view('member-topup');
});
Route::get('member-topup-confirm', function () {
    return view('member-topup-confirm');
});
Route::get('member-topup-success', function () {
    return view('member-topup-success');
});
Route::get('topup', function () {
    return view('topup');
});
Route::get('topup-confirm', function () {
    return view('topup-confirm');
});
Route::get('topup-success', function () {
    return view('topup-success');
});
Route::get('item-confirm', function () {
    return view('item-confirm');
});
Route::get('item-success', function () {
    return view('item-success');
});
Route::get('last-trans', function () {
    return view('last-trans');
});
Route::get('monthly-mark', function () {
    return view('monthly-mark');
});
Route::get('user-annoucement', function () {
    return view('user-annoucement');
});
Route::get('inbox', function () {
    return view('inbox');
});
Route::get('admin', function () {
    return view('admin');
});
Route::get('cashier', function () {
    return view('cashier');
});
//admin Routes;

Route::get('view-user', function () {
    return view('admin/view-user');
});
Route::get('insert-user', function () {
    return view('admin/insert-user');
});
Route::get('delete-user', function () {
    return view('admin/delete-user');
});
Route::get('manage-userstatus', function () {
    return view('admin/manage-userstatus');
});
Route::get('cash-inReq', function () {
    return view('admin/cash-inReq');
});
Route::get('cash-outReq', function () {
    return view('admin/cash-outReq');
});
Route::get('remit-tobank', function () {
    return view('admin/remit-tobank');
});
Route::get('remit-tognet', function () {
    return view('admin/remit-tognet');
});
Route::get('cash-deposit', function () {
    return view('admin/cash-deposit');
});
Route::get('cash-withdrawl', function () {
    return view('admin/cash-withdrawl');
});
Route::get('end-ofmonth', function () {
    return view('admin/end-ofmonth');
});
Route::get('all-userannoucement', function () {
    return view('admin/all-userannoucement');
});
Route::get('individual-annoucement', function () {
    return view('admin/individual-annoucement');
});
Route::get('change-marktype', function () {
    return view('admin/change-marktype');
});


Route::get('insert-item', function () {
    return view('cashier/insert-item');
});
Route::get('delete-item', function () {
    return view('cashier/delete-item');
});
Route::get('sale-item', function () {
    return view('cashier/sale-item');
});
Route::get('insert-phonebill', function () {
    return view('cashier/insert-phonebill');
});
Route::get('view-products', function () {
    return view('cashier/view-products');
});
Route::get('sale-history', function () {
    return view('cashier/sale-history');
});
Route::get('cash-inhand', function () {
    return view('cashier/cash-inhand');
});





Route::get('mm-index', function () {
    return view('mm/index');
});
Route::get('mm-pricing', function () {
    return view('mm/pricing');
});
Route::get('mm-about', function () {
    return view('mm/about');
});
Route::get('mm-services', function () {
    return view('mm/services');
});
Route::get('mm-item', function () {
    return view('mm/item');
});
Route::get('mm-contact', function () {
    return view('mm/contact');
});
Route::get('mm-reg-page', function () {
    return view('mm/reg-page');
});
Route::get('mm-shopping', function () {
    return view('mm/shopping');
});
Route::get('mm-product-list', function () {
    return view('mm/product-list');
});
Route::get('mm-login-page', function () {
    return view('mm/login-page');
});
Route::get('mm-confirm', function () {
    return view('mm/confirm');
});
Route::get('mm-success', function () {
    return view('mm/success');
});
Route::get('mm-member-home', function () {
    return view('mm/member-home');
});
Route::get('mm-PassForBalance', function () {
    return view('mm/PassForBalance');
});
Route::get('mm-cash-balance', function () {
    return view('mm/cash-balance');
});
Route::get('mm-level-graph', function () {
    return view('mm/level-graph');
});
Route::get('mm-cash-in', function () {
    return view('mm/cash-in');
});
Route::get('mm-cash-in-success', function () {
    return view('mm/cash-in-success');
});
Route::get('mm-cash-out', function () {
    return view('mm/cash-out');
});
Route::get('mm-cash-out-success', function () {
    return view('mm/cash-out-success');
});
Route::get('mm-remit', function () {
    return view('mm/remit');
});
Route::get('mm-remit-confirm', function () {
    return view('mm/remit-confirm');
});
Route::get('mm-remit-success', function () {
    return view('mm/remit-success');
});
Route::get('mm-user-guide', function () {
    return view('mm/user-guide');
});
Route::get('mm-ac-settings', function () {
    return view('mm/ac-settings');
});
Route::get('mm-member-topup', function () {
    return view('mm/member-topup');
});
Route::get('mm-member-topup-confirm', function () {
    return view('mm/member-topup-confirm');
});
Route::get('mm-member-topup-success', function () {
    return view('mm/member-topup-success');
});
Route::get('mm-topup', function () {
    return view('mm/topup');
});
Route::get('mm-topup-confirm', function () {
    return view('mm/topup-confirm');
});
Route::get('mm-topup-success', function () {
    return view('mm/topup-success');
});
Route::get('mm-item-confirm', function () {
    return view('mm/item-confirm');
});
Route::get('mm-item-success', function () {
    return view('mm/item-success');
});
Route::get('mm-last-trans', function () {
    return view('mm/last-trans');
});






Route::get('ID/{id}',function($id){
echo 'ID: '.$id;
});
Route::get('/user/{name?}',function($name = 'Virat'){
echo "Name: ".$name;
});

// Very Important #studied
Route::get  ('blade', function () { 
									return view('page',array('name' => 'Chan htike'));
								}
			);
Route::get  ('blade2', function () { 
									return view('welcome',array('name' => 'Ya Min'));
								}
			);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
Route::get('role',[
'middleware' => 'Role:editor',
'uses' => 'TestController@index',
]);
Route::get('terminate',[
'middleware' => 'terminate',
'uses' => 'ABCController@index',
]);

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
