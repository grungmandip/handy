<?php

require_once( __DIR__ . '/init.php');

//getting insert items
if (true === isset($_SESSION['buffer']['input'])) {
    $input = $_SESSION['buffer']['input'];
} else {
    //$input = []; // PHP 5.4以降ならこっちでもよい
    $input = array();
}

//session error getting
if (true === isset($_SESSION['buffer']['error_detail'])) {
    $error_detail = $_SESSION['buffer']['error_detail'];
} else {
    //$error_detail = []; // PHP 5.4以降ならこっちでもよい
    $error_detail = array();
}

//deleting session buffering
unset($_SESSION['buffer']);


// using CSRF token
//******

//giving address to template
$smarty_obj->assign('input',  $input);
$smarty_obj->assign('error_detail_count', count($error_detail));
$smarty_obj->assign('error_detail',  $error_detail); // エラー全般


// showing in template 
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('inquiry_food.tpl');

?>