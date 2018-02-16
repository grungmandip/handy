<?php

require_once( __DIR__ . '/../init.php');
//
include('../library/head.php');
// テンプレートを指定して出力
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('index.tpl');

//
include('../library/foot.php');
