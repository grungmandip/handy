<?php
/* Smarty version 3.1.30, created on 2018-01-09 19:03:57
  from "/var/www/html/maharajan/myproj/smarty/templates/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a54938d809df5_10561663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0604e36f4e7c3066159422dfdb8d75ac5e8a1f56' => 
    array (
      0 => '/var/www/html/maharajan/myproj/smarty/templates/admin/index.tpl',
      1 => 1515492227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a54938d809df5_10561663 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="mycontainer">
	<div class="mybox">
		<form action="adlogin.php" method="post" class="login_form">
		<legend class="main_title"><h2>管理者ログイン</h2></legend>
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
