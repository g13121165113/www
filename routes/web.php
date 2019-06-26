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
    return view('welcome');
});
Route::get('/stu_create', 'studentController@create');
Route::post('/stu_add', 'studentController@add');
Route::get('/stu_index', 'studentController@index');
Route::get('/stu_delete', 'studentController@delete');
Route::get('/stu_update', 'studentController@update');
Route::post('/stu_doupdate', 'studentController@doupdate');

//登录
Route::get('/login_login', 'admin\login@login');
Route::post('/login_do', 'admin\login@dologin');
//注册
Route::get('/register', 'admin\login@register');
Route::post('/doregister', 'admin\login@doregister');
//商品
Route::get('/goods_create', 'admin\goodsController@goods_create');
Route::post('/goods_docreate', 'admin\goodsController@goods_docreate');
Route::get('/goods_index', 'admin\goodsController@goods_index');
Route::middleware(['goods'])->group(function () {
    Route::get('/goods_update', 'admin\goodsController@goods_update');
});
Route::post('/goods_doupdate', 'admin\goodsController@goods_doupdate');
Route::get('/goods_delete', 'admin\goodsController@goods_delete');
//分类
Route::get('/cate_index', 'admin\cateController@index');
Route::get('/cate_create', 'admin\cateController@create');
Route::post('/cate_docreate', 'admin\cateController@docreate');
Route::get('/cate_update', 'admin\cateController@update');
Route::post('/cate_doupdate', 'admin\cateController@doupdate');
Route::get('/cate_delete', 'admin\cateController@delete');

//前台/////////////////////////////////////////////////////////////////////////
//前台首页                                                                   //
Route::get('/index_index','Index\indexController@index');                   //
//前台商品页分类页商品模块                                                    //
Route::get('/index_class','Index\goodsController@index');                   //
//前台购物车                                                                 //
Route::get('/index_car','Index\carController@index');                       //
//前台个人中心                                                               //
Route::get('/index_ui-me','Index\uimeController@index');                    //
Route::get('/index_myset','Index\uimeController@myset');                    //
//前台 发现                                                                  //
Route::get('/index_find','Index\findController@index');                     //
//前台商品搜索                                                               //
Route::get('/index_goods_search','Index\indexController@searchgoods');      //
//用户登录&注册                                                              //
Route::any('/index_login','Index\loginController@login');                   //
Route::post('/index_dologin','Index\loginController@dologin');              //
Route::get('/index_register','Index\loginController@register');             //
Route::post('/index_doregister','Index\loginController@doregister');        //
Route::get('/index_logout','Index\loginController@logout');                 //
//商品详情                                                                   //
Route::get('/index_product','Index\goodsController@product');               //
//加入购物车                                                                 //
Route::get('/index_docar','Index\carController@docar');                     //
Route::get('/index_product','Index\goodsController@product');               //
//下订单                                                                     //
Route::get('/index_order','Index\orderController@index');                   //
Route::get('/index_order2','Index\orderController@index2');                 //
Route::get('/index_order3','Index\orderController@index3');                 //
Route::get('/index_changeStatus','Index\orderController@changeStatus');    //
//支付                                                                      //
Route::get('/index_pay','Pay\AliPayController@pay');                        //
Route::post('/notify_url','Pay\AliPayController@aliNotify');                 //
Route::get('/return_url','Pay\AliPayController@aliReturn');                 //
//////////////////////////////////////////////////////////////////////////////











