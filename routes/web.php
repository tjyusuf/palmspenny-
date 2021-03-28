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

Route::get('/', function () {
    return view('welcome');
});

Route::group(["middleware" => 
	'auth:sanctum', 
	'verified'
], function(){

	Route::get('/admin', function(){
		return view('admin');
	})->name('admin');

	Route::get('/dashboard', function(){
		return view('dashboard');
	})->name('dashboard');

	Route::get('/izisave', function(){
		return view('izisave');
	})->name('izisave');

	Route::get('/peersusu', function(){
		return view('peersusu');
	})->name('peersusu');

	Route::get('/groups', function(){
		return view('groups');
	})->name('groups');

	Route::get('/wallet', function(){
		return view('wallet');
	})->name('wallet');

	Route::get('/account', function(){
		return view('account');
	})->name('account');

	Route::get('/wallet', function(){
		return view('wallet');
	})->name('wallet');

	Route::get('/faqs',function(){
		return view('faqs');
	})->name('faqs');

});
