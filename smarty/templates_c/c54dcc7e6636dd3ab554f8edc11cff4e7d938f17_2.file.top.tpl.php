<?php
/* Smarty version 3.1.30, created on 2018-01-09 15:41:41
  from "/var/www/html/maharajan/myproj/smarty/templates/admin/top.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a546425ddbe31_22854943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c54dcc7e6636dd3ab554f8edc11cff4e7d938f17' => 
    array (
      0 => '/var/www/html/maharajan/myproj/smarty/templates/admin/top.tpl',
      1 => 1515480061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a546425ddbe31_22854943 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<title>admin_top</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../style/handy.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="mycontainer">
		<div class="mybox">
			<div class="grid-me">
				<legend class="main_title"><h1>管理画面</h1></legend>
				<div class="grided"><a href="../#.php">ユーザーの追加</a></div>
				<div class="grided"><a href="../menu.php">メニュー</a></div>
				<div class="grided"><a href="../handy.php">ハンディー</a></div>
				<div class="grided"><a href="tachiage_list.php">お客情報</a></div>
				<div class="grided"><a href="../#.php">サイドメニュー<br class="sp-only">追加</a></div>
				<div class="grided"><a href="../#.php">＃＃＃＃</a></div>
				<div class="grided"><a href="../#.php">＃＃＃＃＃</a></div>
			</div>
		</div>
		<hr>
		<a href="./logout.php"><button class="btn btn-primary btn-lg">ログアウト</button></a>
	</div>
</body>
</html><?php }
}
