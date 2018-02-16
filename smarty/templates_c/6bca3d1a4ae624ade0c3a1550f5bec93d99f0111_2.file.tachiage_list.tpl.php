<?php
/* Smarty version 3.1.30, created on 2018-01-16 15:46:18
  from "/var/www/html/maharajan/myproj/smarty/templates/admin/tachiage_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5d9fba83f3c6_26457654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bca3d1a4ae624ade0c3a1550f5bec93d99f0111' => 
    array (
      0 => '/var/www/html/maharajan/myproj/smarty/templates/admin/tachiage_list.tpl',
      1 => 1516085103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5d9fba83f3c6_26457654 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	function myconfirm() {
		confirm("削除してもよろしいですか？");
	}
<?php echo '</script'; ?>
>
<div class= "mycontainer">
	<form action="tachiage_list.php" method="GET">
		<div class="mybox">
			<legend class="mycorner"><h3>ご来店お客様のリスト</h3></legend>
			<div class="sub-box">
				<div class="form-group">
					テーブル番:<input name="table_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find_string']->value['table_name'], ENT_QUOTES, 'UTF-8');?>
" class="form-control"><br>
					客数：<input name="count" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find_string']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="form-control"><br>
					時間：<input name="time" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find_string']->value['time'], ENT_QUOTES, 'UTF-8');?>
" class="form-control"><br>
					<br>
					<button class="btn btn-primary btn-lg btn-block">検索</button>
				</div>
			</div>
		</div>
		<table class="table table-hover mytable">
			<thead>
				<tr>
					<th>テーブル</th>
					<th>客数</th>
					<th>時間</th>
					<th>動作</th>
				</tr>
				<input type="hidden" value=customer_id></input>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tachiage_list']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
				<tr>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['table_name'], ENT_QUOTES, 'UTF-8');?>
</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['count'], ENT_QUOTES, 'UTF-8');?>
</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['createdOn'], ENT_QUOTES, 'UTF-8');?>
</td>
					<td><button class="btn btn-danger btn-sm" onclick="myconfirm()" value="$del_id.customer_id">削除</button></td>
				</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</thead>
		</table>
	</form>
	<hr>
	<a href="top.php">Home</a>
</div>
<?php }
}
