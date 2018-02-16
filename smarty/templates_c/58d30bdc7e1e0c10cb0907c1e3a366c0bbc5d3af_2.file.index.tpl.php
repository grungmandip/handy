<?php
/* Smarty version 3.1.30, created on 2018-01-09 19:01:25
  from "/var/www/html/maharajan/myproj/smarty/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5492f532b294_51624247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58d30bdc7e1e0c10cb0907c1e3a366c0bbc5d3af' => 
    array (
      0 => '/var/www/html/maharajan/myproj/smarty/templates/index.tpl',
      1 => 1515492082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5492f532b294_51624247 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="mycontainer">
	<div class="mybox">
		<form action="login.php" method="post" class="login_form">
		<legend class="main_title"><h2>ユーザーログイン</h2></legend>
			<div class="sub-box">
				<div class="form-group">
					<input type="text" class="form-control" width="100%" placeholder="ユーザー名 (例：キン 太郎)" name="id">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="パスワード" name="pw">
				</div>
				<button class="btn btn-primary btn-lg btn-block">ログイン</button>
			</div>
		</form>
	</div>
	<div>
</div>
<?php }
}
