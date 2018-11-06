<?php
use think\Route;


/*home前台*/
Route::rule('/','home/index/index','GET');  //首页路由注册


//前台路由设置
Route::group('home',function(){
    Route::get('index/index','home/index/index');

});


//后台路由设置
Route::group('admin',function(){
    Route::get('index/index','admin/index/index');

});