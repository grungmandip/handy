<?php
/* Smarty version 3.1.30, created on 2017-07-13 18:12:29
  from "/var/www/html/maharajan/myproj/smarty/templates/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5967397d7dfc28_79032449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0604e36f4e7c3066159422dfdb8d75ac5e8a1f56' => 
    array (
      0 => '/var/www/html/maharajan/myproj/smarty/templates/admin/index.tpl',
      1 => 1499937042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5967397d7dfc28_79032449 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
<body>
<h1>管理画面</h1>
	<form action="./adlogin.php" method="post">
	id:<input name="id"><br>
	password:<input name="pw"><br>
	<br>
	<button>ログイン</button>
	</form>
</body>
</html><?php }
}
