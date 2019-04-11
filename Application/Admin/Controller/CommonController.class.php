<?php
namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{
    public function __construct()
    {
    	parent::__construct();
    	// 验证是否成功登录， 如果没有登录，就跳转到登录窗口去
        if ( empty($_SESSION['flag']) ) {
            $this->error('请你先登录', '/index.php?m=admin&c=login&a=login');
        }

    }
    
}