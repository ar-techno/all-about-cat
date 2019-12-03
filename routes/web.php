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

