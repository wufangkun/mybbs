<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	// 获取分区信息
    	$parts = M('bbs_part')->select();
    	$parts = array_column($parts, null, 'pid');



    	// 获取板块信息
    	$cates = M('bbs_cate')->select();

    	// 把板块的信息 追加到分区信息中
    	foreach ($cates as $cate) {
    		$parts[ $cate['pid'] ]['sub'][] = $cate;
    	}

    	// echo '<pre>';
    	// print_r($parts);

    	$this->assign('parts', $parts);
        $this->display(); // View/Index/index.html
    }


}