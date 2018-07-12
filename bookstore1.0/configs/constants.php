<?php
//定义服务器默认URL
define("SERVER_URL","http://".$_SERVER['SERVER_NAME']."/PHP/bookstore1.0/");

//定义前台静态资源常量
define("__HOME__","public/home/");
define("__HOME_CSS__",SERVER_URL.__HOME__."css/");
define("__HOME_IMAGES__",SERVER_URL.__HOME__."images/");
define("__HOME_JS__",SERVER_URL.__HOME__."js/");

//定义前台公共代码文件的地址常量
define("__HOME_COMMON__","application/home/views/common/");

//定义登录功能静态资源常量
define("__LOGIN__","public/login/");
define("__LOGIN_CSS__",SERVER_URL.__LOGIN__."css/");
define("__LOGIN_IMAGES__",SERVER_URL.__LOGIN__."images/");
define("__LOGIN_JS__",SERVER_URL.__LOGIN__."js/");

//定义后台静态资源常量
define("__ADMIN__","public/admin/");
define("__ADMIN_CSS__",SERVER_URL.__ADMIN__."css/");
define("__ADMIN_JS__",SERVER_URL.__ADMIN__."js/");
define("__ADMIN_IMAGES__",SERVER_URL.__ADMIN__."images/");
//定义后台公共代码文件的地址常量
define("__ADMIN_COMMON__","application/admin/views/common/");

//2018.07.10=================================================================
//定义前台静态  商品详情   资源常量
define("__GOODS__","public/goods/");
define("__GOODS_CSS__",SERVER_URL.__GOODS__."css/");
define("__GOODS_IMAGES__",SERVER_URL.__GOODS__."images/");
define("__GOODS_JS__",SERVER_URL.__GOODS__."js/");

//定义前台静态  商品列表   资源常量
define("__LIST__","public/list/");
define("__LIST_CSS__",SERVER_URL.__LIST__."css/");
define("__LIST_IMAGES__",SERVER_URL.__LIST__."images/");
define("__LIST_JS__",SERVER_URL.__LIST__."js/");
//2018.07.10=================================================================