<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\ReportingController;
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
    return view('admin.index    ');
});
Route::view('index','admin.index');
Route::get('customer','FirebaseController@index');
Route::view('business','admin.business');
Route::view('business_categories','admin.business_categories');
Route::view('post_basic','admin.post_basic');
Route::view('post_promoted','admin.post_promoted');
Route::view('business_audience','admin.business_audience');
Route::view('reporting_tracting','admin.reporting_tracting');
Route::view('tools','admin.tools');
Route::view('metrics','admin.metrics');
Route::view('admin_setting','admin.admin_setting');
Route::view('logout','admin.logout');
Route::view('login','admin.login');
Route::post('login',function(){
    return view('admin.login');
});
Route::view('forget_password','admin.forget_password');
Route::view('live_post','admin.live_post');
Route::view('over_post','admin.over_post');

Route::fallback(function(){
    return view('admin.index');
});