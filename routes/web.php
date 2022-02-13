<?php

use App\Product;


//Product dependency injection
Route::bind('product', function ($slug)
{
    return Product::where('slug', $slug)->first();
});

//Category dependency injection
Route::bind('category', function ($category)
{
    return App\Category::find($category);
});

//User dependency injection
Route::bind('user', function ($user)
{
    return App\User::find($user);
});


Route::get('/', function () {
    return view('welcome');
});

//Carro de compra
Route::get('/index', 'StoreController@index')->name('index');

Route::get('/index/{slug}', 'StoreController@show')->name('product.details');

Route::get('cart/show', 'CartController@show')->name('cart.show');

Route::get('cart/add/{product}', 'CartController@add')->name('cart.add');

Route::get('cart/delete/{product}', 'CartController@delete')->name('cart.delete');

Route::get('cart/trash', 'CartController@trash')->name('cart.trash');

Route::get('cart/update/{product}/{quantity?}', 'CartController@update')->name('cart.update');

// Authentication
// Route::get('auth/login', 'Auth\AuthController@getLogin')->name('login.get');
// Route::post('auth/login', 'Auth\AuthController@postLogin')->name('login.post');

// Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logout');

// //Registration
// Route::get('auth/register', 'Auth\AuthController@register')->name('register');

// Route::post('auth/register', 'Auth\AuthController@postRegister')->name('register.post');


Auth::routes();

Route::get('auth/logout', function ()
{
    Auth::logout();
    return redirect()->route('index');
})->name('logout');

Route::get('/home', 'StoreController@index')->name('home');

Route::get('order-detail', ['middleware'=>'auth', 'as'=>'order-detail', 'uses'=>'CartController@orderDetail']);

//Paypal
//Enviar pedido a paypal
Route::get('payment', array('as'=>'payment', 'uses'=>'PaypalController@postPayment'));
// Route::get('payment/test', array('as'=>'payment', 'uses'=>'PaypalController@saveOrder'));

//Paypal redirecciona a esta ruta
Route::get('payment/status', array('as'=>'payment.status', 'uses'=>'PaypalController@getPaymentStatus'));



//Administración
Route::middleware(['admin'])->group(function () 
{
    
    Route::get('admin/home', function(){
        return view('admin.home');
    })->name('admin.home');

    Route::resource('admin/category', \Admin\CategoryController::class);
    
    Route::resource('admin/product', \Admin\ProductController::class);
    
    Route::resource('admin/user', \Admin\UserController::class);

    Route::get('admin/orders', 'Admin\OrderController@index')->name('orders.index');

    Route::post('admin/order/get-items', 'Admin\OrderController@getItems')->name('order.getItems');

    Route::get('admin/order/{id}', 'Admin\OrderController@destroy')->name('order.destroy');
});