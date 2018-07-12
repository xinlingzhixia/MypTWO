<?php
namespace application\admin\models;

/*用户留言信息管理数据模型*/
use core\mybase\Model;

class GbmgrModel extends Model
{
    /*查询有多少条留言*/
    public function count($like=null){ //count查询总数($like模糊查询=null默认值为空)
        $sql=null;//
        if ($like!=null){ //if判断 ($like模糊查询!=不等于null)
            $sql="SELECT COUNT(1) AS total FROM guestbook WHERE uname LIKE '%" .$like. "%' ";//AS区别名为total
        }else{ //如果为空
            $sql="SELECT COUNT(1) AS total FROM guestbook"; //查询总条数
        }
        $result=$this->query($sql,null); //$result结果返回二维数组=$this->query方法($sql传参sql语句,null参数为空);
        return $result[0]["total"]; //return返回数组的 $result长度[0二维数组只有一条用户信息]
    }
    /*分页留言信息查询*/
    public function list($pageIndex=1,$pageSize=10,$like=null)
    {
        $aql=null;
        if ($like!=null){
            $sql="SELECT * FROM guestbook WHERE uname LIKE '%".$like."%' ORDER BY id DESC LIMIT ".($pageIndex - 1) * $pageSize. ",". $pageSize;
        }else{
            $sql="SELECT * FROM guestbook ORDER BY id DESC LIMIT ".($pageIndex - 1)*$pageSize.",".$pageSize;

        }
        return $this->query($sql,null);
    }
    /*删除留言*/
    public function del($args)
    {
        $sql="DELETE FROM guestbook WHERE id=?";
        return $this->execute($sql,$args);
    }

}
