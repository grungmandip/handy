<?php 


require_once( __DIR__ . '/init.php');
require_once( __DIR__ . '/user/init_auth.php');
include('./library/head.php');
//templateをdisplayする
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('handy.tpl');
include('./library/foot.php');


?>