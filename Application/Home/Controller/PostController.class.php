<?php
namespace Home\Controller;

use Think\Controller;

class PostController extends Controller
{
    // 发帖
    public function create()
    {
        // 如果没有登录成功，就跳到登录界面去
        if (empty($_SESSION['flag'])) {
            $this->error('请先登录...', '/');
        }

        // 获取板块信息
        $cates = M('bbs_cate')->getField('cid,cname');

        $this->assign('cates', $cates);
        $this->display(); //View/Post/create.html
    }

    public function save()
    {
        // 帖子数据:标题,内容,用户ID,版块ID,创建时间,修改时间
        $data = $_POST;
        // echo '<pre>';
        // print_r($_POST);die;

        // 发帖人
        $data['uid'] = $_SESSION['userInfo']['uid'];
        
        // 创建时间，更新时间
        $data['updated_at'] = $data['create_at'] = time();
        $row = M('bbs_post')->add( $data );

        if ($row) {
            $this->success('帖子发布成功！');
        } else {
            $this->error('帖子发布失败！');
        }
    }

    // 帖子列表
    public function index()
    {
        // 要显示那个板块下面的帖子
        $cid = empty($_GET['cid']) ? 1 : $_GET['cid'];
        // 获取数据
        $posts = M('bbs_post')->where("cid=$cid")->order(" updated_at desc ")->select();

        // 获取所有用户信息
        $users = M('bbs_user')->getField('uid,uname');
        // echo '<pre>';
        // print_r($posts);
        // 遍历显示
        $this->assign('posts', $posts);
        $this->assign('users', $users);
        $this->display(); // View/Post/index.html
    }


}