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
	Route::get('/logo', function () {
		$img =  DB::table('perusahaans')->select('logo')->first();
		return response()->file(storage_path('images/perusahaan/img-logo/' . $img->logo));
	});
	Route::get('/favicon', function () {
		$img =  DB::table('perusahaans')->select('favicon')->first();
		return response()->file(storage_path('images/perusahaan/img-logo/' . $img->favicon));
	});

	Auth::routes();

	// Route::post('/login', 'backend\AuthController@login');
	// Route::post('/logout','backend\AuthController@logout');
	// Route::match(['get','post'],'/login','AuthController@login');
	// Route::post('/login','AuthController@login');
	Route::group(['middleware' => ['hakakses']], function () {
		Route::get('/dashboard', 'backend\Dashboard@index')->name('dashboard');

		Route::get('/menu', 'backend\Menus@index')->name('menu');
		Route::prefix('data-menu')->as('menu')->group(function(){
			Route::post('/save','backend\Menus@store');
			Route::post('/edit','backend\Menus@update');
			Route::post('/update-struktur', 'backend\Menus@updateStruktur');
			Route::get('/show-edit/{id}', 'backend\Menus@show');
		});

		Route::get('/identitas', 'backend\IdentitasPerusahaan@index')->name('identitas');
		Route::prefix('data-identitas')->as('identitas')->group(function(){
			Route::post('/update','backend\IdentitasPerusahaan@edit');
			Route::get('/getImageLogo/{image}', function ($img = null) {
				return response()->file(storage_path('images/perusahaan/img-logo/' . $img));
			});
			Route::get('/getImageFavicon/{image}', function ($img = null) {
				return response()->file(storage_path('images/perusahaan/img-logo/' . $img));
			});

		});
	
		Route::get('/store', 'backend\StoreInformation@index')->name('store');
		Route::get('/klinik', 'backend\StoreInformation@index')->name('klinik');
		Route::get('/groomers', 'backend\StoreInformation@index')->name('groomers');

		Route::get('/produk-toko-kucing', 'backend\Produk@index')->name('produk-toko-kucing');
		Route::get('/produk-groomers', 'backend\Produk@index')->name('produk-groomers');
		Route::get('/album-toko-kucing', 'backend\Album@index')->name('album-toko-kucing');
		Route::get('/album-klinik', 'backend\Album@index')->name('album-klinik');
		Route::get('/album-groomers', 'backend\Album@index')->name('album-groomers');
		Route::get('/dashboard-ekspeditor', 'backend\Ekspeditor@index')->name('dashboard-ekspeditor');
		Route::get('/produk-promo', 'backend\Promo@index')->name('produk-promo');

		Route::get('/akses-menu', 'backend\AksesMenu@index')->name('akses-menu');
		Route::prefix('akses-menu')->as('akses-menu')->group(function(){
			Route::post('/save-main','backend\AksesMenu@store');
			Route::post('/edit-main','backend\AksesMenu@update');
			Route::get('/show-main/{id}','backend\AksesMenu@show');
			Route::post('/del-main/{id}','backend\AksesMenu@destroy');

			Route::post('/save-submenu','backend\AksesMenu@store_submenu');
			Route::get('/show-submenu/{id}','backend\AksesMenu@showSubmenu');
			Route::post('/edit-submenu','backend\AksesMenu@updateSubmenu');
			Route::post('/del-submenu/{id}','backend\AksesMenu@destroySubmenu');
		});

		Route::get('/jenis-vendor', 'backend\JenisVendor@index')->name('jenis-vendor');
		Route::get('/pendaftaran', 'backend\Pendaftaran@index')->name('pendaftaran');
	});

	Route::get('logout', 'Auth\LoginController@logout', function () {
    	return abort(404);
	});

