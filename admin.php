<?php
/**
 *
 *
 * @author cong.cheng <2015年12月14日 上午9:31:43>
 * @copyright Copyright (C) 2015 AddCn.SZ
 * @version 2.0 admin.php
 */
// 检测PHP环境
if (version_compare(PHP_VERSION, '5.3.0', '<')) {
    die('require PHP > 5.3.0 !');
}

define('THINK_PATH', './ThinkPHP/');
define('APP_DEBUG', true);


define('BIND_MODULE', 'Admin');
define('BUILD_CONTROLLER_LIST','Index,User');
define('BUILD_MODEL_LIST','User,Goods');

define('APP_PAHT', './Application/');

require THINK_PATH.'ThinkPHP.php';