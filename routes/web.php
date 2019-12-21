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
	Route::get('/index.html', function () { return view('frontend/beranda');	});
	Route::get('/aboutus.html', function () { return view('frontend/aboutus');	});
	Route::get('/blog-standard.html', function () { return view('frontend/blog-standard');	});
	Route::get('/cart.html', function () { return view('frontend/cart');	});
	Route::get('/checkout.html', function () { return view('frontend/checkout');	});
	Route::get('/contact-us.html', function () { return view('frontend/contact-us');	});
	Route::get('/gallery.html', function () { return view('frontend/gallery');	});
	Route::get('/shop-detail.html', function () { return view('frontend/shop-detail');	});
	Route::get('/shop.html', function () { return view('frontend/shop');	});
	Route::get('/single-blog.html', function () { return view('frontend/single-blog');	});
	Route::get('/services.html', function () { return view('frontend/services');	});
	Route::get('/404.html', function () { return view('frontend/404');	});

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
	Route::get('/info-acount', function () { return view('backend/error/info-acount');	});
	Route::group(['middleware' => ['hakakses','auth']], function () {
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
		Route::prefix('jenis-vendor')->as('jenis-vendor')->group(function(){
			Route::get('/show','backend\JenisVendor@show');
			Route::post('/save-vendor','backend\JenisVendor@store');
			Route::post('/edit-vendor','backend\JenisVendor@update');
			Route::post('/del-vendor/{id}','backend\JenisVendor@destroy');
			Route::get('/show-editvendor/{id}','backend\JenisVendor@edit');


			Route::get('/show-layanan','backend\LayananVendor@show');
			Route::post('/save-layanan','backend\LayananVendor@store');
			Route::post('/edit-layanan','backend\LayananVendor@update');
			Route::post('/del-layanan/{id}','backend\LayananVendor@destroy');
			Route::get('/show-editlayanan/{id}','backend\LayananVendor@edit');
		});
		Route::get('/pendaftaran', 'backend\Pendaftaran@index')->name('pendaftaran');
		Route::prefix('data-pendaftar')->as('pendaftaran')->group(function(){
			Route::get('/show-edit/{id}','backend\Pendaftaran@edit');
			Route::post('/edit-data','backend\Pendaftaran@update');
		});
	});

	Route::get('logout', 'Auth\LoginController@logout', function () {
    	return abort(404);
	});

