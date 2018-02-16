<?php
require_once( __DIR__ . '/../init.php');
require_once( __DIR__ . '/init_auth.php');
include('../library/head.php');
header('Location: ../handy.php');
//templateをdisplayする
//error_reporting(E_ALL & ~E_NOTICE);
//$smarty_obj->display('handy.tpl');
include('../library/foot.php');
