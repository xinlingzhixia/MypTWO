<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/10
 * Time: 12:24
 */

namespace application\admin\controllers;
use application\admin\models\UsersModel;
use core\mybase\AdminGroupController;

class UsersController extends AdminGroupController
{
    /*分页用户数据*/
    public function list(){
        $pageIndex=isset($_GET['pageIndex'])?$_GET['pageIndex']:1;
        $pageSize=isset($_GET['pageSize'])?$_GET['pageSize']:10;
        $like=isset($_GET['like'])?$_GET['like']:null;
        $gm=new UsersModel();
        //获得符合条件的总记录数
        $total=$gm->count($like);

        //获得分页用户数据
        $list=$gm->list($pageIndex,$pageSize,$like);
        $result=["total"=>$total,"rows"=>$list];
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
    }
    /*删除用户信息*/
    public function del()
    {
        $id=isset($_GET['id'])?$_GET['id']:-1;
        $gm=new UsersModel();
        $reult=$gm->del([$id]);
        if ($reult>0){
            $this->success("删除用户成功，2秒后跳转回用户操作视图。","?g=admin&c=main&a=users");
        }else{
            $this->fail("删除用户失败，2秒后跳转回用户操作视图。","?g=admin&c=main&a=users");
        }
    }
}