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

// Route::get('/', function () {
//     return view('frontend/beranda');
// });

// Frontend
	Route::get('/', 'frontend\index@index');
	Route::get('/home', function () { return view('frontend/beranda');	});
	Route::get('/about', function () { return view('frontend/about');	});
	Route::get('/blog', function () { return view('frontend/blog');	});
	Route::get('/contact', function () { return view('frontend/contact');	});

// Backend
	Auth::routes();

	// Route::post('/login', 'backend\AuthController@login');
	// Route::post('/logout','backend\AuthController@logout');
	// Route::match(['get','post'],'/login','AuthController@login');
	// Route::post('/login','AuthController@login');
	Route::group(['middleware' => ['auth']], function () {
		Route::get('/menu', 'backend\Menu@index');
		Route::get('/dashboard', 'backend\Dashboard@index');
		Route::get('/store', 'backend\StoreInformation@index');
		Route::get('/klinik', 'backend\StoreInformation@index');
		Route::get('/groomers', 'backend\StoreInformation@index');
		Route::get('/identitas', 'backend\IdentitasPerusahaan@index');
		Route::get('/produk-toko-kucing', 'backend\Produk@index');
		Route::get('/album-toko-kucing', 'backend\Album@index');
		Route::get('/album-klinik', 'backend\Album@index');
		Route::get('/album-groomers', 'backend\Album@index');
		Route::get('/dashboard-ekspeditor', 'backend\Ekspeditor@index');
		Route::get('/produk-promo', 'backend\Promo@index');
		Route::get('/akses-menu', 'backend\AksesMenu@index');
		Route::get('/jenis-vendor', 'backend\JenisVendor@index');
	});

	Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

