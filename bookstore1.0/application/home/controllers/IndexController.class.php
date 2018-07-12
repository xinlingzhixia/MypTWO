<?php

namespace application\home\controllers;

use application\home\models\GuestBookModel;
use core\mybase\Controller;

/**控制器类*/
class IndexController extends Controller
{
    /**系统默认访问的方法*/
    public function index()
    {
        $this->display();
    }

    public function about()
    {
        $this->display();
    }

    public function contact()
    {
        $this->display();
    }

    public function news()
    {
        $this->display();
    }

    public function services()
    {
        $this->display();
    }

    public function goods()
    {
        $this->display();
    }

    //2018.07.10=======================王丽君
    public function index1()
    {
        $this->display();
    }

    public function index2()
    {
        $this->display();
    }

    public function index3()
    {
        $this->display();
    }

    public function index4()
    {
        $this->display();
    }

    public function index5()
    {
        $this->display();
    }

    public function index6()
    {
        $this->display();
    }

    public function list()
    {
        $this->display();
    }


    //添加留言信息控制器方法
    public function guestbook()
    {
        //获取从表单传递过来的数据
        $feedback = ["errno" => 500, "mess" => "留言失败"];
        $args = [$_POST['uname'], $_POST['uemail'], $_POST['uphone'], $_POST['umessage']];
        //持久化用户留言数据
        $gbm = new GuestBookModel();
        $result = $gbm->add($args);
        //返回留言板页面
        //$this->display('contact');
        if ($result > 0) {
            $feedback['errno'] = 200;
            $feedback['mess'] = "留言成功";
        }
        echo json_encode($feedback, JSON_UNESCAPED_UNICODE);
    }

}