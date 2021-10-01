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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', 'App\Http\Controllers\FitoadminController@dashboard_1');
Route::get('/index', 'App\Http\Controllers\FitoadminController@dashboard_1');
Route::get('/app-profile', 'App\Http\Controllers\FitoadminController@app_profile');
Route::get('/ecom-checkout', 'App\Http\Controllers\FitoadminController@ecom_checkout');
Route::get('/ecom-customers', 'App\Http\Controllers\FitoadminController@ecom_customers');
Route::get('/ecom-invoice', 'App\Http\Controllers\FitoadminController@ecom_invoice');
Route::get('/ecom-product-detail', 'App\Http\Controllers\FitoadminController@ecom_product_detail');
Route::get('/ecom-product-grid', 'App\Http\Controllers\FitoadminController@ecom_product_grid');
Route::get('/ecom-product-list', 'App\Http\Controllers\FitoadminController@ecom_product_list');
Route::get('/ecom-product-order', 'App\Http\Controllers\FitoadminController@ecom_product_order');
Route::get('/page-error-400', 'App\Http\Controllers\FitoadminController@page_error_400');
Route::get('/page-error-403', 'App\Http\Controllers\FitoadminController@page_error_403');
Route::get('/page-error-404', 'App\Http\Controllers\FitoadminController@page_error_404');
Route::get('/page-error-500', 'App\Http\Controllers\FitoadminController@page_error_500');
Route::get('/page-error-503', 'App\Http\Controllers\FitoadminController@page_error_503');
Route::get('/page-forgot-password', 'App\Http\Controllers\FitoadminController@page_forgot_password');
Route::get('/page-lock-screen', 'App\Http\Controllers\FitoadminController@page_lock_screen');
Route::get('/page-login', 'App\Http\Controllers\FitoadminController@page_login');
Route::get('/page-register', 'App\Http\Controllers\FitoadminController@page_register');
Route::get('/widget-basic', 'App\Http\Controllers\FitoadminController@widget_basic');
Route::get('/category', 'App\Http\Controllers\FitoadminController@category_menu');
Route::get('/favourites', 'App\Http\Controllers\FitoadminController@favourites_menu');
Route::get('/layout', 'App\Http\Controllers\FitoadminController@layout');


Route::resource('view', 'App\Http\Controllers\ViewController');
Route::resource('/', 'App\Http\Controllers\IndexController');
Route::resource('detail', 'App\Http\Controllers\DetailController');

Route::resource('favourites', 'App\Http\Controllers\FavouritesController');
Route::resource('/wishlist', 'App\Http\Controllers\WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);

Route::resource('roupas', 'App\Http\Controllers\RoupaController');
Route::resource('mochilas', 'App\Http\Controllers\MochilasController');
Route::resource('category', 'App\Http\Controllers\CategoryController');
Route::resource('accessory', 'App\Http\Controllers\AccessoryController');
Route::resource('viewall', 'App\Http\Controllers\ViewallController');
Route::resource('search', 'App\Http\Controllers\SearchController');
Route::resource('woman', 'App\Http\Controllers\MulherController');
Route::resource('man', 'App\Http\Controllers\HomemController');
Route::resource('t-shirt', 'App\Http\Controllers\TshirtController');
Route::resource('meias', 'App\Http\Controllers\MeiasController');
Route::resource('camisola', 'App\Http\Controllers\CamisolaController');
Route::resource('camisa', 'App\Http\Controllers\CamisaController');
Route::resource('casaco', 'App\Http\Controllers\CasacoController');
Route::resource('vestido', 'App\Http\Controllers\VestidoController');
Route::resource('calças', 'App\Http\Controllers\CalcasController');
Route::resource('tenis', 'App\Http\Controllers\TenisController');
Route::resource('chinelos', 'App\Http\Controllers\ChinelosController');
Route::resource('malas', 'App\Http\Controllers\MalasController');
Route::resource('acessorios', 'App\Http\Controllers\AcessoriosController');
Route::resource('mochila', 'App\Http\Controllers\MochilaController');

Route::get('/shopcart', 'App\Http\Controllers\ShopcartController@index');
Route::post('/shopcart/add-to-cart', 'App\Http\Controllers\ShopcartController@addToCart');
Route::get('/cart', 'App\Http\Controllers\CartController@index');

Route::get('/cart/pay-with-paypal', 'App\Http\Controllers\CartController@payWithPaypal');
Route::get('/cart/paypal-success', 'App\Http\Controllers\CartController@paypalSuccess')->name('paypal-success');
Route::get('/cart/paypal-cancel', 'App\Http\Controllers\CartController@paypalCancel')->name('paypal-cancel');


Route::get('admin', function(){return view('adminView');});
Route::get('regular', function(){return view('normalView');});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', function(){
        return view('adminView');
    });
    Route::resource('products', 'App\Http\Controllers\ProductController');
    Route::resource('user', 'App\Http\Controllers\UserController');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
