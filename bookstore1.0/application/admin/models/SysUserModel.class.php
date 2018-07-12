<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/4
 * Time: 12:06
 */

namespace application\admin\models;


use core\mybase\Model;

class SysUserModel extends Model
{
    //根据用户名密码获取用户信息
    public function getUserByNameAndPwd($args){ //getUserByNameAndPwd传递用户名和密码($args的参数)
        $sql="SELECT * FROM sysuser WHERE name=? AND pwd=?";
        $result=$this->query($sql,$args); //$result获得一个结果=$this继承下来这个查询的方法去调用->query方法($sql语句,$args参数); //【返回一个二维数组】[["result"=>1]]
        if (count($result)>0){ //if 判断(count计算数组($result数组长度)是否>0){
            return $result[0];//return返回数组的 $result长度[0二维数组只有一条用户信息]
        }else{
            return null; //没有查询到用户记录
        }
    }

}