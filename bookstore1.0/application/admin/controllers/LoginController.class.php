<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/4
 * Time: 10:01
 */

namespace application\admin\controllers;


use application\admin\models\SysUserModel;
use core\mybase\AdminGroupController;
use core\MySession;

class LoginController extends AdminGroupController
{
    //打开登陆视图
    public function index()
    {
        $this->display();
    }


    //用户登录
    public function login() //login登录
    {
        $feedback = ["errno" => 500, "mess" => "用户名不存在"];//$feedback回馈数组=["errno错误代码"=>500错误,"mess信息"=>"注册失败！"];
        //从用户请求中获取数据（获取用户名，密码）
        $account = isset($_POST['account']) ? $_POST['account'] : null;// $uname = isset($_POST['uname']) ? $_POST['uname'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $sysremember =isset($_POST["sysremember"])?true:false;
        if ($account != null && $password != null) {
            $args = [$account, md5($password)]; //密码使用md5函数加密
            $sum = new SysUserModel();
            $result = $sum->getUserByNameAndPwd($args);
            if ($result != null) { //如果返回结果不为空
                $feedback = ["errno" => 200, "mess" => "登录成功"];//$feedback反馈信息
                //用户登录信息保存在session中
                //MySession::startSession();
                MySession::setSession("id", $result["id"]);
                MySession::setSession("name", $result["name"]);
                MySession::setSession("sysremember",$sysremember);
                if ($sysremember) {
                    MySession::extendSession();
                }
            }
        }
        echo json_encode($feedback, JSON_UNESCAPED_UNICODE);//【向客户端返回ajax数组】返回json格式字符串echo json_encode数组转化成接送对象($feedback反馈信息,JSON_UNESCAPED_UNICODE：避免中文乱码）
    }

    //注销登陆方法
    public function logout(){
        MySession::destorySession();
        header("index.php?g=admin&c=login&a=index");
    }
}