<?php
/* Smarty version 3.1.30, created on 2017-05-30 18:20:20
  from "/home/maharajan/Inquiry/smarty/templates/inquiry.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592d3954608686_65233096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '145a10710989872880ce86d45e0ee9546093b391' => 
    array (
      0 => '/home/maharajan/Inquiry/smarty/templates/inquiry.tpl',
      1 => 1496136011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592d3954608686_65233096 (Smarty_Internal_Template $_smarty_tpl) {
?>


<html>
<head>
<title></title>
<meta charset="UTF-8">

</head>
<body>

<?php if (0 < $_smarty_tpl->tpl_vars['error_detail_count']->value) {?>
  <div style = "color:red;">error alert</div>

<?php }?>

<?php if (true == $_smarty_tpl->tpl_vars['error_detail']->value['error_must_email']) {?>
  <div style = "color:red;">email address not found.</div>
<?php }?>

<?php if (true == $_smarty_tpl->tpl_vars['error_detail']->value['error_csrf_token']) {?>
  <div style = "color:red;">CSRF token error.</div>
<?php }?>






	<form action = "./inquiry_fin.php" method ="post">
		emailアドレス(*):<input type= "text" name ="email"
 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><br>

		名前:<input type="text" name="name" 
value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><br>

		誕生日:<input type="text" name="birthday" 
value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['birthday'], ENT_QUOTES, 'UTF-8');?>
"><br>

		お問い合わせ<textarea name="body"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['body'], ENT_QUOTES, 'UTF-8');?>
</textarea></br>

		<input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['csrf_token']->value, ENT_QUOTES, 'UTF-8');?>
">


		<button>お問い合わせ</button>
	</form>

</body>
</html><?php }
}
