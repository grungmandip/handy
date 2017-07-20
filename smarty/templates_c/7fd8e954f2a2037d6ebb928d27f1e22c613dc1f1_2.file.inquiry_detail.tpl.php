<?php
/* Smarty version 3.1.30, created on 2017-06-29 10:58:55
  from "/home/maharajan/Inquiry/smarty/templates/admin/inquiry_detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59545edf813ea4_17512263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fd8e954f2a2037d6ebb928d27f1e22c613dc1f1' => 
    array (
      0 => '/home/maharajan/Inquiry/smarty/templates/admin/inquiry_detail.tpl',
      1 => 1498553410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59545edf813ea4_17512263 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php echo htmlspecialchars(var_dump($_smarty_tpl->tpl_vars['inquiry_data']->value), ENT_QUOTES, 'UTF-8');?>

<table class = "table">
<tr>
	<td>id
	<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['inquiry_id'], ENT_QUOTES, 'UTF-8');?>

</tr>
<tr>
	<td>email
	<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['email'], ENT_QUOTES, 'UTF-8');?>

</tr>
<tr>
	<td>name
	<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['name'], ENT_QUOTES, 'UTF-8');?>

</tr>
<tr>
	<td>birthday
	<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['birthday'], ENT_QUOTES, 'UTF-8');?>

</tr>
<tr>
	<td>body
	<td><pre><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['inquiry_body'], ENT_QUOTES, 'UTF-8');?>
</pre>
</tr>
<h2></h2>
<ul>
	<li>「返信をmailする」機能
	<li>「」
</ul>

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
