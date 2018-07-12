<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9
 * Time: 18:09
 */

namespace application\admin\controllers;

use application\admin\models\PagestableModel;
use core\mybase\AdminGroupController;
class PagestableController extends AdminGroupController
{
    /*分页书库数据*/
    public function list(){
        $pageIndex=isset($_GET['pageIndex'])?$_GET['pageIndex']:1;
        $pageSize=isset($_GET['pageSize'])?$_GET['pageSize']:10;
        $like=isset($_GET['like'])?$_GET['like']:null;
        $gm=new PagestableModel();
        //获得符合条件的总记录数
        $total=$gm->count($like);

        //获得分页书库数据
        $list=$gm->list($pageIndex,$pageSize,$like);
        $result=["total"=>$total,"rows"=>$list];
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
    }
    /*删除书库信息*/
    public function del()
    {
        $id=isset($_GET['id'])?$_GET['id']:-1;
        $gm=new PagestableModel();
        $reult=$gm->del([$id]);
        if ($reult>0){
            $this->success("删除书籍成功，2秒后跳转回书籍操作视图。","?g=admin&c=main&a=pagestable");
        }else{
            $this->fail("删除书籍失败，2秒后跳转回书籍操作视图。","?g=admin&c=main&a=pagestable");
        }
    }
    //修改书库信息


    public function update1(){
        $quantity=$_POST['tage'];
        $price=$_POST['tcourse'];
        $id=$_POST['tid'];
        $args=[$quantity,$price,$id];
        $gm=new PagestableModel();
        $result=$gm->update($args);
        echo $result;

    }
}