<?php
/* Smarty version 3.1.30, created on 2017-12-16 16:32:39
  from "/var/www/html/maharajan/myproj/smarty/templates/handy.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a34cc17cc4348_30618284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12e33fe2e57ba4e58e2b78e18590b5bc36b78af6' => 
    array (
      0 => '/var/www/html/maharajan/myproj/smarty/templates/handy.tpl',
      1 => 1513409555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a34cc17cc4348_30618284 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
.on
	{
		background-color:red;
	}
</style>
<div class="mycontainer">
	<div class="mybox">
		<form class="myform" action="input.php" method="post">
			<div class="grid-seat">
				<div class="grided">
					<a href="tachiage.php?seat=1">
						<button type="button" class="btn btn-primary btn-lg" >空席1 </button>
					</a>
				</div>
				<div class="grided">
					<span><a href="tachiage.php?seat=a">
						<button type="button" class="btn btn-primary btn-lg" >空席A </button>
					</a></span>
				</div>
				<div class="grided">
					<a href="tachiage.php?seat=2">
						<button type="button" class="btn btn-primary btn-lg" >空席2 </button>
					</a>
				</div>
				<div class="grided">
					<a href="tachiage.php?seat=b">
						<button type="button" class="btn btn-primary btn-lg" >空席B </button>
					</a>
				</div>
				<div class="grided">
					<a href="tachiage.php?seat=3">
						<button type="button" class="btn btn-primary btn-lg" >空席3 </button>
					</a>
				</div>
				<div class="grided">
					<a href="tachiage.php?seat=c">
						<button type="button" class="btn btn-primary btn-lg" >空席C </button>
					</a>
				</div>
			</div>
		</div>
		<hr>
		<a href="user/user_logout.php"><button class="btn btn-primary btn-lg">ログアウト</button></a>
	</form>
</div>

<?php echo '<script'; ?>
>
	$(".btn").on("click",function(){
	$(this).toggleClass("on");
	$(this).css('background','red');


	});

	function call(type){
	console.log(type+" called");

	}


<?php echo '</script'; ?>
>
<?php }
}
