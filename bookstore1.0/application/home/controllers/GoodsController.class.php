<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/10
 * Time: 9:22
 */

namespace application\home\controllers;
use application\Home\models\GoodsModel;
use core\mybase\HomeGroupcontroller;

class GoodsController extends HomeGroupcontroller
{
    /*分页留言数据*/
    public function list(){
        $pageIndex=isset($_GET['pageIndex'])?$_GET['pageIndex']:1;
        $pageSize=isset($_GET['pageSize'])?$_GET['pageSize']:10;
        $like=isset($_GET['like'])?$_GET['like']:null;
        $gm=new GoodsModel();
        //获得符合条件的总记录数
        $total=$gm->count($like);
        //获得分页数据
        $list=$gm->list($pageIndex,$pageSize,$like);
        $result=["total"=>$total,"rows"=>$list];
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
    }
    /*删除留言*/
    public function del()
    {
        $id=isset($_GET['id'])?$_GET['id']:-1;
        $gm=new GoodsModel();
        $reult=$gm->del([$id]);
        if ($reult>0){
            $this->success("删除信息成功，返回购物车页面","?g=home&c=index&a=goods");
        }else{
            $this->fail("删除信息失败，返回购物车页面","?g=home&c=index&a=goods");
        }
    }
    //购买
    public function god()
    {
        $id=isset($_GET['id'])?$_GET['id']:-1;
        $gm=new GoodsModel();
        $reult=$gm->del([$id]);
        if ($reult>0){
            $this->success("购买成功，返回购物车页面","?g=home&c=index&a=goods");
        }else{
            $this->fail("购买失败，返回购物车页面","?g=home&c=index&a=goods");
        }
    }
}