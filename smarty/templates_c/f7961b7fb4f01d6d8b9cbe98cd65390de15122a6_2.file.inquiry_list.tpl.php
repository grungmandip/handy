<?php
/* Smarty version 3.1.30, created on 2017-06-27 19:13:31
  from "/home/maharajan/Inquiry/smarty/templates/admin/inquiry_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59522fcbeb5915_08195468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7961b7fb4f01d6d8b9cbe98cd65390de15122a6' => 
    array (
      0 => '/home/maharajan/Inquiry/smarty/templates/admin/inquiry_list.tpl',
      1 => 1498558410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59522fcbeb5915_08195468 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>



<body>
	<div class="container">






	<h1>お問い合わせ一覧</h1>

	


<h2>検索</h2>
<form action = "./inquiry_list.php" method = "GET">
name(あいまい)<input name = "name" value = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find_string']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><br>
email<input name = "email" value = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find_string']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><br>
誕生日<input name ="birthday_from" value = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find_string']->value['birthday_from'], ENT_QUOTES, 'UTF-8');?>
">~<input name = "birthday_to" value = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find_string']->value['birthday_to'], ENT_QUOTES, 'UTF-8');?>
"><br>
<button>検索</button>
</form>

<h2>一覧</h2>
		<table class ="table table-hover">
		<tr>
			<th>ID
			<th>おといあわせい内容

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inquiry_list']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
			<tr>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['inquiry_id'], ENT_QUOTES, 'UTF-8');?>
<br>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['inquiry_body'], ENT_QUOTES, 'UTF-8');?>
<br>
				<td><a href="./inquiry_detail.php?inquiry_id=<?php echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['i']->value['inquiry_id']), ENT_QUOTES, 'UTF-8');?>
" class = "btn btn-normal">otoiawase</a>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>
	<hr>
	<a href ="./top.php">Top</a>
	</div>


<!-- Latest compiled and minified JavaScript -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
