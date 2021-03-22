<?php

use App\Http\Controllers\WebsiteController;
use App\Models\Category;
use App\Models\MainCategory;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
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
// Route::get('/about', [WebsiteController::class, 'about']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/','WebsiteController@index')->name('website_index');
Route::get('/products','WebsiteController@products')->name('website_products');
Route::get('/details','WebsiteController@details')->name('website_details');
Route::get('/cart','WebsiteController@cart')->name('website_cart');
Route::get('/checkout','WebsiteController@checkout')->name('website_checkout');
Route::get('/wishlist','WebsiteController@wishlist')->name('website_wishlist');
Route::get('/contact','WebsiteController@contact')->name('website_contact');

Route::group( [
        'prefix'=>'admin',
        'middleware'=>['auth'],
        'namespace'=>'Admin'
    ],function(){

        Route::get('/','AdminController@index')->name('admin_index');
});

// user management
Route::group( [
    'prefix'=>'user',
    'middleware'=>['auth','check_user_is_active','super_admin'],
    'namespace'=>'Admin'
],function(){
    Route::get('/index','UserController@index')->name('admin_user_index');
    Route::get('/view/{id}','UserController@view')->name('admin_user_view');
    Route::get('/create','UserController@create')->name('admin_user_create');
    Route::post('/store','UserController@store')->name('admin_user_store');
    Route::get('/edit/{id}','UserController@edit')->name('admin_user_edit');
    Route::post('/update','UserController@update')->name('admin_user_update');
    Route::post('/delete','UserController@delete')->name('admin_user_delete');

    Route::post('/test','UserController@test')->name('admin_user_test');
});

Route::group( [
    'prefix'=>'user-role',
    'middleware'=>['auth','check_user_is_active','super_admin'],
    'namespace'=>'Admin'
],function(){
    Route::get('/index','UserRoleController@index')->name('admin_user_role_index');
    Route::get('/view/{id}','UserRoleController@view')->name('admin_user_role_view');
    Route::get('/create','UserRoleController@create')->name('admin_user_role_create');
    Route::post('/store','UserRoleController@store')->name('admin_user_role_store');
    Route::get('/edit','UserRoleController@edit')->name('admin_user_role_edit');
    Route::post('/update','UserRoleController@update')->name('admin_user_role_update');
    Route::post('/delete','UserRoleController@delete')->name('admin_user_role_delete');
});

Route::group( [
    'prefix'=>'admin/product',
    'middleware'=>['auth'],
    'namespace'=>'Product'
],function(){

    // basic_page
    Route::resource('product','ProductController');

    // Route::get('/brand','BrandController@index')->name('brand.index');
    // Route::get('/brand/get/{id}','BrandController@get')->name('brand.get');
    // Route::get('/brand/create','BrandController@create')->name('brand.create');
    // Route::get('/brand/show/{id}','BrandController@show')->name('brand.show');
    // Route::get('/brand/edit/{id}','BrandController@edit')->name('brand.edit');
    // Route::post('/brand','BrandController@store')->name('brand.store');
    // Route::put('/brand/{id}','BrandController@update')->name('brand.update');
    // Route::delete('/brand/{id}','BrandController@destroy')->name('brand.destroy');

    Route::resource('brand','BrandController');
    Route::resource('main_category','MainCategoryController');
    Route::resource('category','CategoryController');
    Route::resource('sub_category','SubCategoryController');
    Route::resource('color','ColorController');
    Route::resource('size','SizeController');
    Route::resource('unit','UnitController');
    Route::resource('status','StatusController');
    Route::resource('writer','WriterController');
    Route::resource('publication','PublicationController');
    Route::resource('vendor','VendorController');

    Route::get('/get-all-cateogory-selected-by-main-category/{main_category_id}','CategoryController@get_category_by_main_category')->name('get_all_cateogory_selected_by_main_category');
    Route::get('/get-all-main-category-josn','MainCategoryController@get_main_category_json')->name('get_main_category_json');
    Route::get('/get-all-category-josn','CategoryController@get_category_json')->name('get_category_json');
});


Route::group( [
        'prefix'=>'blank',
        'middleware'=>['auth'],
        'namespace'=>'Admin'
    ],function(){

        // basic_page
        Route::get('/index','AdminController@blade_index')->name('admin_blade_index');
        Route::get('/create','AdminController@blade_create')->name('admin_blade_create');
        Route::get('/view','AdminController@blade_view')->name('admin_blade_view');
});

Route::get('/test',function(){

})->name('route name');

