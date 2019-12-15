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
	Route::group(['middleware' => ['auth']], function () {
		Route::get('/dashboard', 'backend\Dashboard@index');

		Route::get('/menu', 'backend\Menus@index');
		Route::prefix('data-menu')->as('menu')->group(function(){
			Route::post('/save','backend\Menus@store');
			Route::post('/edit','backend\Menus@update');
			Route::post('/update-struktur', 'backend\Menus@updateStruktur');
			Route::get('/show-edit/{id}', 'backend\Menus@show');
		});

		Route::get('/identitas', 'backend\IdentitasPerusahaan@index');
		Route::prefix('data-identitas')->as('identitas')->group(function(){
			Route::post('/update','backend\IdentitasPerusahaan@edit');
			Route::get('/getImageLogo/{image}', function ($img = null) {
				return response()->file(storage_path('images/perusahaan/img-logo/' . $img));
			});
			Route::get('/getImageFavicon/{image}', function ($img = null) {
				return response()->file(storage_path('images/perusahaan/img-logo/' . $img));
			});

		});
	
		Route::get('/store', 'backend\StoreInformation@index');
		Route::get('/klinik', 'backend\StoreInformation@index');
		Route::get('/groomers', 'backend\StoreInformation@index');

		Route::get('/produk-toko-kucing', 'backend\Produk@index');
		Route::get('/produk-groomers', 'backend\Produk@index');
		Route::get('/album-toko-kucing', 'backend\Album@index');
		Route::get('/album-klinik', 'backend\Album@index');
		Route::get('/album-groomers', 'backend\Album@index');
		Route::get('/dashboard-ekspeditor', 'backend\Ekspeditor@index');
		Route::get('/produk-promo', 'backend\Promo@index');

		Route::get('/akses-menu', 'backend\AksesMenu@index');
		Route::prefix('akses-menu')->as('akses-menu')->group(function(){
			Route::post('/save-main','backend\AksesMenu@store');
			Route::post('/edit-main','backend\AksesMenu@update');
			Route::get('/show-main/{id}','backend\AksesMenu@show');
			Route::post('/del-main/{id}','backend\AksesMenu@destroy');

			Route::post('/save-submenu','backend\AksesMenu@store_submenu');
			Route::get('/show-submenu/{id}','backend\AksesMenu@showSubmenu');
			Route::post('/edit-submenu','backend\AksesMenu@updateSubmenu');
			Route::post('/del-submain/{id}','backend\AksesMenu@destroySubmenu');
		});

		Route::get('/jenis-vendor', 'backend\JenisVendor@index');
		Route::get('/pendaftaran', 'backend\Pendaftaran@index');
	});

	Route::get('logout', 'Auth\LoginController@logout', function () {
    	return abort(404);
	});

