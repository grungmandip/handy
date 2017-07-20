<!DOCTYPE html>
<html>
<head>
	<title>ハンディ</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--> 
</head>
<link rel="stylesheet" type="text/css" href="style/handy.css">

<body>

<style>



.on{
background-color:red;

}

</style>

<?php include('library/head.php');?>

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

<script>
$(".btn").on("click",function(){
$(this).toggleClass("on");


});

function call(type){
console.log(type+" called");

}


</script>

</body>
</html>
