<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//
//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//
//];
\think\Route::get('admin/add','index/Admin/add');
\think\Route::post('admin/store','index/admin/store');
\think\Route::get('login','index/login/index');
\think\Route::post('login/store','index/login/login');
 \think\Route::get('home','index/home/index');
 \think\Route::get('lgout','index/home/delete');
 \think\Route::get('newpwd','index/admin/password');
 \think\Route::post('admin/pwd','index/admin/pwd');
 \think\Route::get('goods_class/index','index/GoodsClass/index');
\think\Route::get('goods_class/add','index/goodsClass/add');
\think\Route::post('goods_class/store','index/goodsClass/store');
//\think\Route::get('goods/index','index/goods/index');
//\think\Route::get('goods/add','index/goods/add');
//\think\Route::post('goods/store','index/goods/store');
//    \think\Url::build('goods/store','name=store');