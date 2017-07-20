<?php
/* Smarty version 3.1.30, created on 2017-06-20 18:14:08
  from "/home/maharajan/Inquiry/smarty/templates/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5948e760ea1248_35046075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a0acf15e7909d09c7f562aa3b6be5bd623c1e2' => 
    array (
      0 => '/home/maharajan/Inquiry/smarty/templates/admin/index.tpl',
      1 => 1497950012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5948e760ea1248_35046075 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
<body>
	<h1>管理画面</h1>
		<form action="./login.php" method="post">
		id:<input type="text" name="id"><br>
		password:<input type="password" name="pw"><br><br>
		<button>ログイン</button>
		</form>
</body>
</html>
<?php }
}
