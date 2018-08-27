<?php

Route::get('/', 'frontend/Index/index')->name('homepage');

Route::get('/articles$', 'frontend/Article/index')->name('article_index');
Route::get('/articles/:id/show$', 'frontend/Article/detail')
		->pattern(['id'=>'\d+'])
		->name('admin_article_detail');

Route::get('/tags/:id/atricles$', 'frontend/Article/tagArticle')
		->pattern(['id'=>'\d+'])
		->name('tag_article_index');

Route::get('/user/:id/info$', 'frontend/Article/userInfo')
		->pattern(['id'=>'\d+'])
		->name('user_info');


Route::get('/ajax/categories$', 'frontend/Article/categoryIndex')->name('ajax_category_index');
Route::get('/ajax/tags$', 'frontend/Article/tagIndex')->name('ajax_tag_index');
