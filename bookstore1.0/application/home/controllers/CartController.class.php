<?php

namespace application\home\controllers;

use application\home\models\CartModel;

class CartController
{
    public function getGoods1(){
        $feedback = ["errno" => 500, "mess" => "添加失败"];
        //这里往数据库插入的数据，写活的方法
        $name = "跟兄弟连学PHP";
        $price = 99.40;
        $count = 1;
        $author = "兄弟连";
        //定义一个数组，把这些参数存到这个数组里
        $args = [$name,$price,$count,$author];
        //创建对象
        $ac = new CartModel();
        $result = $ac->addGoods($args);
        //判断：如果受影响的行数大于0，则成功
        if ($result > 0){
            $feedback = ["errno" => 200, "mess" => "添加成功"];
        }
        echo json_encode($feedback,JSON_UNESCAPED_UNICODE);
    }
    /**=====黄山=====*/
    public function getGoods2(){
        $feedback = ["errno" => 500, "mess" => "添加失败"];
        $name = "PHP7内核剖析";
        $price = 69.80;
        $count = 1;
        $author = "刘锐铭";
        $args = [$name,$price,$count,$author];
        $ac = new CartModel();
        $result = $ac->addGoods($args);
        if ($result > 0){
            $feedback = ["errno" => 200, "mess" => "添加成功"];
        }
        echo json_encode($feedback,JSON_UNESCAPED_UNICODE);
    }
    public function getGoods3(){
        $feedback = ["errno" => 500, "mess" => "添加失败"];
        $name = "红星照耀中国（青少版）人民文学出版社";
        $price = 31.40;
        $count = 1;
        $author = "渣渣辉";
        $args = [$name,$price,$count,$author];
        $ac = new CartModel();
        $result = $ac->addGoods($args);
        if ($result > 0){
            $feedback = ["errno" => 200, "mess" => "添加成功"];
        }
        echo json_encode($feedback,JSON_UNESCAPED_UNICODE);
    }
    public function getGoods4(){
        $feedback = ["errno" => 500, "mess" => "添加失败"];
        $name = "PHP从入门到精通";
        $price = 31.40;
        $count = 1;
        $author = "盛君君";
        $args = [$name,$price,$count,$author];
        $ac = new CartModel();
        $result = $ac->addGoods($args);
        if ($result > 0){
            $feedback = ["errno" => 200, "mess" => "添加成功"];
        }
        echo json_encode($feedback,JSON_UNESCAPED_UNICODE);
    }
    public function getGoods5(){
        $feedback = ["errno" => 500, "mess" => "添加失败"];
        $name = "PHP+MySQL网站开发全程实例 第2版";
        $price = 46.60;
        $count = 1;
        $author = "皮皮巫";
        $args = [$name,$price,$count,$author];
        $ac = new CartModel();
        $result = $ac->addGoods($args);
        if ($result > 0){
            $feedback = ["errno" => 200, "mess" => "添加成功"];
        }
        echo json_encode($feedback,JSON_UNESCAPED_UNICODE);
    }
    public function getGoods6(){
        $feedback = ["errno" => 500, "mess" => "添加失败"];
        $name = "红星照耀中国（青少版）人民文学出版社";
        $price = 31.40;
        $count = 1;
        $author = "渣渣辉";
        $args = [$name,$price,$count,$author];
        $ac = new CartModel();
        $result = $ac->addGoods($args);
        if ($result > 0){
            $feedback = ["errno" => 200, "mess" => "添加成功"];
        }
        echo json_encode($feedback,JSON_UNESCAPED_UNICODE);
    }
}