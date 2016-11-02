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

Route::get('/', function () {
    return view('front.home');
});

Route::get('/dashboard', function(){
	return view('admin.layout');
})->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/posts', function () {
    return view('front.post.index');
});


//关于商会
Route::get('/about', function () {
    return view('front.about.about');
});
Route::get('/about/aim', function () {
    return view('front.about.aim');
});
Route::get('/about/council', function () {
    return view('front.about.council');
});
Route::get('/about/join-in', function () {
    return view('front.about.join-in');
});
Route::get('/about/regulations', function () {
    return view('front.about.regulations');
});

//萨省简介
Route::get('/sk', function () {
    return view('front.sk.sk');
});
Route::get('/sk/land-environment-cultural', function () {
    return view('front.sk.land-environment-cultural');
});
Route::get('/sk/city-trafic', function () {
    return view('front.sk.city-trafic');
});
Route::get('/sk/policy', function () {
    return view('front.sk.policy');
});
Route::get('/sk/immigration', function () {
    return view('front.sk.immigration');
});
Route::get('/sk/resources', function () {
    return view('front.sk.resources');
});

//商会活动
Route::get('/activity', function () {
    return view('front.activity.activity');
});
Route::get('/activity/calender', function () {
    return view('front.activity.calender');
});
Route::get('/activity/accee', function () {
    return view('front.activity.accee-activities');
});
Route::get('/activity/exchange', function () {
    return view('front.activity.exchange');
});
Route::get('/activity/public-spirit', function () {
    return view('front.activity.public-spirit');
});

//会员企业
Route::get('/membership/members', function () {
    return view('front.membership.members');
});
Route::get('/membership/service', function () {
    return view('front.membership.service');
});
Route::get('/membership/brand-promotion', function () {
    return view('front.membership.brand-promotion');
});
Route::get('/membership/products', function () {
    return view('front.membership.products');
});
Route::get('/membership/career', function () {
    return view('front.membership.career');
});

//会员企业
Route::get('/investment/demand', function () {
    return view('front.investment.demand');
});
Route::get('/investment/sale', function () {
    return view('front.investment.sale');
});



//图片视频
Route::get('/gallery', function () {
    return view('front.gallery.photo-and-video');
});
//图片视频
Route::get('/contact', function () {
    return view('front.contact.contact');
});