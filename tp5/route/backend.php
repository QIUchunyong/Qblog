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
Route::rule('/login', 'backend/Login/login')->name('login');
Route::rule('/logout', 'backend/Login/logout')->name('logout');

Route::rule('/reg', 'backend/Reg/reg')->name('reg');

Route::post('/reg/submit', 'backend/Reg/regSubmit')->name('reg_submit');

Route::get('/user/exist', 'backend/Reg/userExist')->name('user_exist');

//分类管理
Route::get('/admin/category$', 'backend/Category/index')->name('admin_category_index');
Route::rule('/admin/category/add$', 'backend/Category/add')->name('admin_category_add');
Route::rule('/admin/category/:id/edit$', 'backend/Category/edit')
		->pattern(['id'=>'\d+'])
		->name('admin_category_edit');
Route::get('/admin/category/:id/delete$', 'backend/Category/delete')
		->pattern(['id'=>'\d+'])
		->name('admin_category_delete');



//标签管理
Route::get('/admin/tag$', 'backend/Tag/index')->name('admin_tag_index');
Route::rule('/admin/tag/add$', 'backend/tag/add')->name('admin_tag_add');
Route::rule('/admin/tag/:id/edit$', 'backend/tag/edit')
		->pattern(['id'=>'\d+'])
		->name('admin_tag_edit');
Route::get('/admin/tag/:id/delete$', 'backend/tag/delete')
		->pattern(['id'=>'\d+'])
		->name('admin_tag_delete');

//文章管理
Route::get('/admin/article$', 'backend/Article/index')->name('admin_article_index');
Route::rule('/admin/article/add$', 'backend/article/add')->name('admin_article_add');
Route::rule('/admin/article/:id/edit$', 'backend/article/edit')
		->pattern(['id'=>'\d+'])
		->name('admin_article_edit');
Route::get('/admin/article/:id/delete$', 'backend/article/delete')
		->pattern(['id'=>'\d+'])
		->name('admin_article_delete');


//个人信息
Route::rule('/admin/profile$', 'backend/Profile/index')->name('admin_profile');
Route::post('/admin/avatar/change$', 'backend/Profile/avatarChange')->name('admin_avatar_change');
