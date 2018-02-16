
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

<script>
	$(".btn").on("click",function(){
	$(this).toggleClass("on");
	$(this).css('background','red');


	});

	function call(type){
	console.log(type+" called");

	}


</script>
