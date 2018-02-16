<?php
/* Smarty version 3.1.30, created on 2017-12-12 14:53:54
  from "/var/www/html/maharajan/myproj/smarty/templates/tachiage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2f6ef253b4a5_11517853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba5bba2beddd0a34be5df034705130d493c4671b' => 
    array (
      0 => '/var/www/html/maharajan/myproj/smarty/templates/tachiage.tpl',
      1 => 1513058029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2f6ef253b4a5_11517853 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
<head>
<title>tachiage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/handy.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="mybox">
	<form action="tachiage_fin.php" method="post" class="myform">
		<legend class="mycorner"><h3>テーブル<br class="sp-only">立ち上げ</h3></legend>
		<div class="sub-box">
			テーブル:<select name="table_name" class="form-control">
				<option value="tables">テーブルを選択</option>
				<option value="table_name1" <?php if ('1' == $_smarty_tpl->tpl_vars['seat']->value) {?>selected<?php }?>>空席1</option>
				<option value="table_name2" <?php if ('2' == $_smarty_tpl->tpl_vars['seat']->value) {?>selected<?php }?>>空席2</option>
				<option value="table_name3" <?php if ('3' == $_smarty_tpl->tpl_vars['seat']->value) {?>selected<?php }?>>空席3</option>
				<option value="table_name2" <?php if ('4' == $_smarty_tpl->tpl_vars['seat']->value) {?>selected<?php }?>>空席A</option>
				<option value="table_name2" <?php if ('5' == $_smarty_tpl->tpl_vars['seat']->value) {?>selected<?php }?>>空席B</option>
				<option value="table_name2" <?php if ('6' == $_smarty_tpl->tpl_vars['seat']->value) {?>selected<?php }?>>空席C</option>
			</select>
			数人:<input type="number" name="count" class="form-control"><br>
			<br>
			<input type="submit" name="button" value="使用" class="btn btn-primary btn-lg btn-block">
		</div>
	</form>
	<div class="qr" ><button class="btn btn-primary btn-lg mt-4">QR</button></div>
</div>
</body>
</html><?php }
}
