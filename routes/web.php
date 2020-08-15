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

use Gloudemans\Shoppingcart\Facades\Cart;

// Route::get('/', function () {
//     return view('users.index');
// });

Auth::routes(); // ok

// *********************** Rutas pagina principal vist de los usuarios

// Redirige a las vistas de las opciones del navbar
Route::get('navbar/caballeros', 'navbarCrud@caballerosIndex')->name('caballeros'); /* ok */
Route::get('navbar/anillos', 'navbarCrud@anillosIndex')->name('anillos'); /* ok */
Route::get('navbar/gargantillas', 'navbarCrud@gargantillasIndex')->name('gargantillas'); /* ok */
Route::get('navbar/diamantes', 'navbarCrud@diamantesIndex')->name('diamantes'); /* ok */
Route::get('navbar/medallas/{medallas}', [
            'as' => 'medallas',
            'uses' => 'navbarCrud@medallasIndex'
            ]);/* ok */
Route::get('navbar/pulceras/{pulceras}', [
            'as' => 'pulceras',
            'uses' => 'navbarCrud@pulcerasIndex'
            ]); /* ok */
Route::get('navbar/cadenas/{cadenas}', [
            'as' => 'cadenas',
            'uses' => 'navbarCrud@cadenasIndex'
            ]);/* ok */
Route::get('navbar/argollas/{kilataje}', [
            'as' => 'argollas',
            'uses' => 'navbarCrud@argollasIndex'
            ]); /* ok */

// Redirige vista principal de usuarios
Route::resource('/','indexController');
// Redirige a la vista detalle del producto
Route::get('detalles/{id}', 'indexController@detail')->name('detalle');

// redirige a usuarios normales al login
Route::get('/home', 'HomeController@index')->name('home');

// Redirecciona a la vista en index nosotros
Route::view('ours', 'users.ours')->name('ours'); //ok
// Redirecciona a la vista en index contacto
Route::view('contact', 'users.contact')->name('contact'); //ok

// recursos para carrito
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::get('empty', function(){
    Cart::destroy();
});

// Recursos para el checkout
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');

// Recursos para Account
Route::get('/account', 'accountController@index')->name('account.index');
Route::put('/account/{id}', 'accountController@update')->name('account.update');
Route::get('/account/address/{id}', 'accountController@address')->name('account.address');
Route::put('/account/updateAddress/{id}', 'accountController@updateAddress')->name('account.updateAddress');
Route::get('/account/shopping', 'accountController@shopping')->name('account.shopping');
Route::get('/account/detail', 'accountController@detail')->name('account.detail');


// Recursos para busqueda
Route::get('search', 'searchController@search')->name('search');

// ************************ Start routes of Panel Admin
// redirecciona al l vista index del panel
Route::get('panel', 'dashboardController@index')->name('panel'); //ok
// muestra un estatus de las ventas en el panel de admin
Route::get('sales', 'dashboardController@sales')->name('sales'); //ok
// redirige al inventario en el panel de admin
Route::get('stocks', 'dashboardController@stocks')->name('stocks'); //ok
// redirige al listado de uuarios registrados al panel admin (solo para admin)
Route::get('users', 'dashboardController@users')->name('users'); // ok
// Recursos de los productos
Route::resource('/productos','productoscrud');
// Recursos de las caegorias
Route::resource('/categorias','categoriacrud');
// Recusos de las categorias
Route::resource('/subcategorias','subcategoriacrud');
// Recursos de los descuentos
Route::resource('/descuentos','DescuentosCrud');
//prueba mercado pago
Route::get('/prueba','MercadoPago@recibeProductos');