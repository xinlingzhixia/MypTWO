<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 15:11
 */

namespace core;


class MySession
{
    public static function startSession()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public static function destorySession()
    {
        //清空session值
        session_unset();
        //清空cookie
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), null, time() - 1, "/");
        }
        //销毁session
        session_destroy();
    }

    public static function setSession($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public static function getSession($name)
    {
        if (isset($_SESSION[$name])){
            return $_SESSION;
        }else{
            return null;
        }
    }

    public static function extendSession($time=1*60*60){
        setcookie(session_name(),session_id(),time()+$time,"/");
    }
}