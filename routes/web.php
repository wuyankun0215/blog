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

 //控制器路由
 Route::get('admin/index','admin\Index@index' );
 //添加
 Route::get('admin/brand','admin\Brand@create' );
 //执行添加
 Route::post('admin/store','admin\Brand@store' );
 //跳转展示
 Route::get('admin/index','admin\Brand@index' );
 //编辑
 Route::get('admin/edit/{id}','admin\Brand@edit' );
 //执行编辑
 Route::post('admin/update{id}','admin\Brand@update' );
 //删除
 Route::get('admin/del/{id}','admin\Brand@destroy' );
//邮箱
Route::get('send','admin\Brand@sendemail' );

//学生添加
Route::get('admin/student','admin\Student@create' );

//添加
 Route::post('admin/student','admin\student@create' );
 //库村
  Route::get('admin/student','admin\student@create' );