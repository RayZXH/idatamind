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

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

Route::get('login', 'admin/Login/index');
Route::post('admin/login/check', 'admin/Login/check');

Route::get('', 'admin/Index/index');
Route::get('today', 'admin/Index/day');
Route::get('test', 'admin/Index/test');
Route::get('daydetail', 'admin/Index/daydetail');
Route::get('source', 'admin/Index/source');

Route::get('users', 'admin/User/users');//用户列表
Route::get('user/edit', 'admin/User/edit');//编辑用户信息
Route::post('user/edit', 'admin/User/edit');//编辑用户信息
Route::get('user', 'admin/User/one');//用户个人中心
Route::post('admin/user/add', 'admin/User/add');//添加用户
Route::get('admin/user/delete', 'admin/User/delete');//添加用户

Route::get('channel', 'admin/Channel/index');
Route::post('admin/channel/add', 'admin/Channel/add');
Route::get('admin/channel/delete', 'admin/Channel/delete');

Route::get('abc', 'admin/Test/abc');//获取客户ABC分布
Route::get('day', 'admin/Test/day');//获取每日客资情况
Route::get('week', 'admin/Test/week');//获取每日客资情况

return [
];
