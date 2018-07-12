<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/29
 * Time: 14:54
 */

namespace application\home\controllers;

use application\home\models\UserModel;
use core\mybase\HomeGroupcontroller;
use core\MySession;

class UserController extends HomeGroupcontroller
{
    //控制器方法 注册用户的方法register
    public function register()
    {
        $feedback = ["errno" => 500, "mess" => "注册失败！"];
        $uname = $_POST['uname'];
        $upwd = $_POST['upwd'];
        $uemail = $_POST['uemail'];
        $args = [$uname, md5($upwd), $uemail];
        $um = new UserModel();
        $result = $um->add($args);
        if ($result > 0) {
            $feedback = ["errno" => 200, "mess" => "注册成功"];
        }
        echo json_encode($feedback, JSON_UNESCAPED_UNICODE);
    }

    /*注册用户名校验*/
    public function checkuser()
    {
        $uname = $_POST['uname'];
        $args = [$uname];
        $um = new UserModel();
        $result = $um->getUser($args);
        echo $result;
    }

    /**用户登录*/
    public function login()
    {
        $feedback = ["errno" => 500, "mess" => "用户名不存在！"];
        //从用户请求中获取数据
        $uname = isset($_POST['uname']) ? $_POST['uname'] : null;
        $upwd = isset($_POST['upwd']) ? $_POST['upwd'] : null;
        $remember = isset($_POST["remember"]) ? true : false;
        if ($uname != null && $upwd != null) {
            $args = [$uname, md5($upwd)];//密码使用md5函数加密
            $um = new UserModel();
            $result = $um->getUserByNameAndPwd($args);
            if ($result != null) {
                $feedback = ["errno" => 200, "mess" => "登陆成功！"];
                MySession::startSession();
                MySession::setSession("uid", $result["uid"]);
                MySession::setSession("uname", $result["uname"]);
                MySession::setSession("uemail", $result["uemail"]);
                MySession::setSession("remember", $remember);
                if ($remember) {
                    MySession::extendSession();
                }
            }
        }

        echo json_encode($feedback, JSON_UNESCAPED_UNICODE);
    }

    /*打开个人页面*/

    public function main()
    {
        //填充数据
        $this->assign("uid", MySession::getSession("uid"));
        $this->assign("uname", MySession::getSession("uname"));
        $this->assign("uemail", MySession::getSession("uemail"));
        //模拟从数据库读取了一组医生的信息
        $doctors = [["id" => 10001, "name" => "张三"], ["id" => 10002, "name" => "李四"], ["id" => 10003, "name" => "王五"]];
        $this->assign("doctors", $doctors);
        $this->display();
    }
}