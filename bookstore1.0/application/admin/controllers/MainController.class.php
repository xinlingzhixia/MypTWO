<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/4
 * Time: 10:01
 */
namespace application\admin\controllers;
use core\mybase\AdminGroupController;

/**后台主页控制器*/
class MainController extends AdminGroupController
{
    /**打开主页视图*/
    public function main(){
        $this->display();
    }
    public function pagestable(){
        $this->display();
    }
    public function blogtimeline(){
        $this->display();
    }
    public function users(){
        $this->display();
    }
  //打开书籍修改视图方法
    public function edit(){
        $this->display();
    }

    public function pagenew(){
        $this->display();
    }
    public function blognew(){
        $this->display();
    }
    public function gbmgr(){
        $this->display();
    }
    public function commentstimeline(){
        $this->display();
    }
    public function pagetimeline(){
        $this->display();
    }


}