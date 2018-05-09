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

Route::rule('hello/:name', 'index/hello');
// Route::rule('cacheInfo/:name', 'index/cacheInfo')->cache(
// 	[ 
// 		'cacheInfo/:name/:page', 60
// 	]);

Route::rule('show/:id','index/show','GET|POST')->name('new_show');
Route::resource('blog','index/Blog');
return [

];
