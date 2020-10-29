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


// Route::any('/index', function () {
//     phpinfo();
// });


// 前台首页
Route::get('/','Controller\IndexController@index');
// 登录展示
Route::get('/login','Controller\LoginController@login');
// 注册展示
Route::get('/register','Controller\LoginController@register');
// 注册帐号
Route::post('/login/regisDo','Controller\LoginController@regisDo');
// 登录
Route::post('/login/loginDo','Controller\LoginController@loginDo');
// 退出登录
Route::get('/dell','Controller\LoginController@dell');
// 列表
Route::get('/search','Controller\SearchController@search');
// 详情页
Route::get('/seckill_item','Controller\SearchController@seckill_item');
// 秒杀页
Route::get('/seckill_index','Controller\IndexController@seckill_index');
// 秒杀
Route::get('/Index/seckill_index','Controller\index@seckill_index');
// 抽奖
Route::get('/prize','Controller\prizeController@prize');
// 开始抽奖
Route::get('/add','Controller\prizeController@add');
// 电影票
Route::get('/film','Controller\FilmController@Film');
// 秒杀详情
Route::get('/Index/seckill_item','Controller\IndexController@seckill_item');
// 购物车列表
Route::get('/cart','Controller\IndexController@cart');
// 个人中心
Route::any('/Index/home_index','Controller\index@home_index');
Route::any('/Index/home_order_evaluate','Controller\index@home_order_evaluate');
Route::any('/Index/homhome_order_paye_index','Controller\index@home_order_pay');
Route::any('/Index/home_order_receive','Controller\index@home_order_receive');
Route::any('/Index/home_order_send','Controller\index@home_order_send');
Route::any('/Index/home_orderDetail','Controller\index@home_orderDetail');
