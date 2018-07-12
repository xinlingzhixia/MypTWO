<?php
namespace core\mybase;
use core\Application;

/**控制器基类*/
class Controller
{
    protected $view;//视图对象

    /**子类对象如果没有定义 __construct()，子类在实例化的时候会自动调用父类 __construct()。*/
    public function __construct()
    {
        $this->initView();//初始化视图
    }

    /**初始化视图*/
    private function initView(){
        //初始化视图对象
        $this->view=new View();
        // 视图模板的路径： application/home/views/index/index.html
        $this->view->view_dir="application/".Application::$group."/views/".strtolower(Application::$controller)."/";
    }

    /**调用视图对象渲染数据方法*/
    protected function display($viewname=null){
        $this->view->display($viewname);
    }

    /*视图数据填充*/
    protected function assign($name,$value){
        $this->view->assign($name,$value);
    }
    //成功跳转方法
    public function success($msg,$url){
        //$url = ?g=?&c=?&a=?
        echo "<h1 style='font-size: 60px;font-weight: bold'>:)</h1>";
        echo "<h4 style='font-size: 40px;font-weight: bold'>".$msg."</h4><br/>";
        header("Refresh:1;url=index.php".$url);
    }

    //失败方法
    public function error($msg,$url){
        //url = ?g=?&c=?&a=?
        echo "<h1>:(</h1>";
        echo "<h4>".$msg."</h4><br/>";
        header("Refresh:1;url=index.php".$url);
    }
}