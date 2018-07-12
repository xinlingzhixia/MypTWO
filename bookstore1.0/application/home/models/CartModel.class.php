<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/10
 * Time: 19:13
 */

namespace application\home\models;

//对数据库操作数据（增删查改）
use core\mybase\Model;

class CartModel extends Model
{
    //往购物车数据表，插入数据
    public function addGoods($args){
        //构建sql语句
        $sql = "insert into goods VALUES(default,?,?,?,?)";
        //当前类继承父类Model，调用父类方法的增删改方法（execute），然后返回一个受影响行数的结果集
        return $this->execute($sql,$args);
    }
}