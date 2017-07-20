<?php
/* Smarty version 3.1.30, created on 2017-07-19 13:21:33
  from "/var/www/html/maharajan/myproj/smarty/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596ede4dba34a5_31237456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58d30bdc7e1e0c10cb0907c1e3a366c0bbc5d3af' => 
    array (
      0 => '/var/www/html/maharajan/myproj/smarty/templates/index.tpl',
      1 => 1499146642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596ede4dba34a5_31237456 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>ハンディ</title>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--> 
</head>
<link rel="stylesheet" type="text/css" href="style/handy.css">

<body>

<style>



.on{
background-color:red;

}

</style>

<?php echo '<?php ';?>include('library/head.php');<?php echo '?>';?>

<form id=form action="input.php" method="post">

<div class="form">
<table>
	 <tr><td><a href="input.php">
	  <button type="button" class="blueButton btn" >空席1</button>
	</a></td>
	     <td><a href="input.php">
	  <button type="button" class="blueButton btn">空席A</button>
	</a></td></tr>
	 <tr><td><a href="input.php">
	  <button type="button" class="blueButton btn" >空席2</button>
	</a></td>
	     <td><a href="input.php">
	  <button type="button" class="blueButton btn">空席B</button>
	</a></td></tr>
	 <tr><td><a href="input.php">
	  <button type="button" class="blueButton btn" >空席3</button>
	</a></td>
	     <td><a href="input.php">
	  <button type="button" class="blueButton btn">空席C</button>
	</a></td></tr>

</table>
</div>

<?php echo '<script'; ?>
>
$(".btn").on("click",function(){
$(this).toggleClass("on");


});

function call(type){
console.log(type+" called");

}


<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
