<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', 'WebsiteController@index')->name('website_index');
Route::get('/products', 'WebsiteController@products')->name('website_products');

Route::get('/products/category/{main_category}', 'WebsiteController@main_category_products')->name('website_main_category_products');
Route::get('/products/category/{main_category}/all-product-json', 'WebsiteController@main_category_products_json')->name('website_main_category_products_json');

Route::get('/products/category/{main_category}/{category}', 'WebsiteController@category_products')->name('website_category_products');
Route::get('/products/category/{main_category}/{category}/all-product-json', 'WebsiteController@category_products_json')->name('website_category_products_json');

Route::get('/products/category/{main_category}/{category}/{sub_category}', 'WebsiteController@sub_category_products')->name('website_sub_category_products');
Route::get('/products/category/{main_category}/{category}/{sub_category}/all-product-json', 'WebsiteController@sub_category_products_json')->name('website_sub_category_products_json');


Route::get('/product-details/{product}', 'WebsiteController@details')->name('website_product_details');
Route::get('/cart', 'WebsiteController@cart')->name('website_cart');

Route::get('/checkout', 'WebsiteController@checkout')->name('website_checkout')->middleware('auth');
Route::post('/checkout-confirm','WebsiteController@checkout_confirm')->name('check_out_confirm')->middleware('auth');
Route::get('/checkout_success','WebsiteController@checkout_success')->name('checkout_success')->middleware('auth');
Route::post('/save_checkout_information','CheckOutController@save_checkout_information')->name('save_checkout_information')->middleware('auth');
Route::get('/get_latest_checkout_information','CheckOutController@get_latest_checkout_information')->name('get_latest_checkout_information')->middleware('auth');

Route::get('/wishlist', 'WebsiteController@wishlist')->name('website_wishlist');
Route::get('/contact', 'WebsiteController@contact')->name('website_contact');
Route::get('/learn-vue', 'WebsiteController@vue')->name('website_vue');



Route::group([
    'prefix' => 'json',
], function () {

    Route::get('/get-min-max-price', 'WebsiteController@get_min_max_price_json')->name('product_get_min_max_price_json');
    Route::get('/get-all-category', 'WebsiteController@get_all_category_json')->name('product_get_all_category_json');

    // Route::get('/products/category/{main_category}/all-product-json', 'WebsiteController@main_category_products_json')->name('website_main_category_products_json');
    // Route::get('/category-products-json/{main_category_id}/{category_id}', 'WebsiteController@category_product_json')->name('product_category_product_json');


    Route::get('/latest-products-json', 'WebsiteController@latest_product_json')->name('product_latest_product_json');
    Route::get('/show-product-json/{product}', 'WebsiteController@show_product_json')->name('product_show_product_json');
    Route::get('/get-product-related-info-json/{product}', 'WebsiteController@get_product_related_info_json')->name('product_get_product_related_info_json');

});

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth'],
    'namespace' => 'Admin'
], function () {

    Route::get('/', 'AdminController@index')->name('admin_index');
});

// user management
Route::group([
    'prefix' => 'user',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Admin'
], function () {
    Route::get('/index', 'UserController@index')->name('admin_user_index');
    Route::get('/view/{id}', 'UserController@view')->name('admin_user_view');
    Route::get('/create', 'UserController@create')->name('admin_user_create');
    Route::post('/store', 'UserController@store')->name('admin_user_store');
    Route::get('/edit/{id}', 'UserController@edit')->name('admin_user_edit');
    Route::post('/update', 'UserController@update')->name('admin_user_update');
    Route::post('/delete', 'UserController@delete')->name('admin_user_delete');

    Route::post('/test', 'UserController@test')->name('admin_user_test');
});

Route::group([
    'prefix' => 'user-role',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Admin'
], function () {
    Route::get('/index', 'UserRoleController@index')->name('admin_user_role_index');
    Route::get('/view/{id}', 'UserRoleController@view')->name('admin_user_role_view');
    Route::get('/create', 'UserRoleController@create')->name('admin_user_role_create');
    Route::post('/store', 'UserRoleController@store')->name('admin_user_role_store');
    Route::get('/edit', 'UserRoleController@edit')->name('admin_user_role_edit');
    Route::post('/update', 'UserRoleController@update')->name('admin_user_role_update');
    Route::post('/delete', 'UserRoleController@delete')->name('admin_user_role_delete');
});

Route::group([
    'prefix' => 'admin/product',
    'middleware' => ['auth'],
    'namespace' => 'Product'
], function () {

    // basic_page
    Route::resource('product', 'ProductController');

    // Route::get('/brand','BrandController@index')->name('brand.index');
    // Route::get('/brand/get/{id}','BrandController@get')->name('brand.get');
    // Route::get('/brand/create','BrandController@create')->name('brand.create');
    // Route::get('/brand/show/{id}','BrandController@show')->name('brand.show');
    // Route::get('/brand/edit/{id}','BrandController@edit')->name('brand.edit');
    // Route::post('/brand','BrandController@store')->name('brand.store');
    // Route::put('/brand/{id}','BrandController@update')->name('brand.update');
    // Route::delete('/brand/{id}','BrandController@destroy')->name('brand.destroy');

    Route::resource('brand', 'BrandController');
    Route::resource('main_category', 'MainCategoryController');
    Route::resource('category', 'CategoryController');
    Route::resource('sub_category', 'SubCategoryController');
    Route::resource('color', 'ColorController');
    Route::resource('size', 'SizeController');
    Route::resource('unit', 'UnitController');
    Route::resource('status', 'StatusController');
    Route::resource('writer', 'WriterController');
    Route::resource('publication', 'PublicationController');
    Route::resource('vendor', 'VendorController');

    Route::get('/get-all-cateogory-selected-by-main-category/{main_category_id}', 'CategoryController@get_category_by_main_category')->name('get_all_cateogory_selected_by_main_category');
    Route::get('/get-all-sub-cateogory-selected-by-category/{category_id}', 'CategoryController@get_sub_category_by_category')->name('get_all_sub_category_by_category');
    Route::get('/get-all-main-category-josn', 'MainCategoryController@get_main_category_json')->name('get_main_category_json');
    Route::get('/get-all-category-josn', 'CategoryController@get_category_json')->name('get_category_json');
});


Route::group([
    'prefix' => 'file-manager',
    'middleware' => ['auth'],
    'namespace' => 'Admin'
], function () {

    Route::post('/store-file', 'FileManagerController@store_file')->name('admin_fm_store_file');
    Route::get('/get-files', 'FileManagerController@get_files')->name('admin_fm_get_files');
    Route::delete('/delete-file/{image}', 'FileManagerController@delete_file')->name('admin_fm_delete_file');
});

Route::group([
    'prefix' => 'blank',
    'middleware' => ['auth'],
    'namespace' => 'Admin'
], function () {

    // basic_page
    Route::get('/index', 'AdminController@blade_index')->name('admin_blade_index');
    Route::get('/create', 'AdminController@blade_create')->name('admin_blade_create');
    Route::get('/view', 'AdminController@blade_view')->name('admin_blade_view');
});

Route::post('/test', function (Request $request) {

    dd($request->all());
})->name('route name');
