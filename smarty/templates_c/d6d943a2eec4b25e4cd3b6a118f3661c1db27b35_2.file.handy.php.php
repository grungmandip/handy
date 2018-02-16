<?php
/* Smarty version 3.1.30, created on 2017-08-04 13:32:09
  from "/var/www/html/maharajan/myproj/handy/handy.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5983f8c9663c35_06783898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6d943a2eec4b25e4cd3b6a118f3661c1db27b35' => 
    array (
      0 => '/var/www/html/maharajan/myproj/handy/handy.php',
      1 => 1500450730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5983f8c9663c35_06783898 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php 


';?>require_once( __DIR__ . '/init.php');
include('./library/head.php');
//templateをdisplayする
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('handy.tpl');


<?php echo '?>';
}
}
