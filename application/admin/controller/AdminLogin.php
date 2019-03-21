<?php

namespace app\admin\controller;
use think\Controller;

/**
 * 管理员登录
 */
class AdminLogin extends Controller
{
	public function index()
	{
		// return "登录";
		return $this -> fetch();
	}
}