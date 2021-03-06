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

/**
	* 注册GET路由
	* @access public
	* @param  string    $rule 路由规则
	* @param  mixed     $route 路由地址
	* @param  array     $option 路由参数
	* @param  array     $pattern 变量规则
	* @return RuleItem
*/

Route::get('hello/[:name]', 'index/hello');
Route::get('login$', 'admin/AdminLogin/index',['ext' => 'html']);

return [

];
