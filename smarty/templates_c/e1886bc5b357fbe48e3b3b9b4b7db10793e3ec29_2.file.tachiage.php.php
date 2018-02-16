<?php
/* Smarty version 3.1.30, created on 2017-08-04 13:37:27
  from "/var/www/html/maharajan/myproj/handy/tachiage.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5983fa076e0525_54578402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1886bc5b357fbe48e3b3b9b4b7db10793e3ec29' => 
    array (
      0 => '/var/www/html/maharajan/myproj/handy/tachiage.php',
      1 => 1501135697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5983fa076e0525_54578402 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>require_once( __DIR__ . '/init.php');
include('./library/head.php');

//templateをdisplayする
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('tachiage.tpl');
<?php }
}
