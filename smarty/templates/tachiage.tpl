
<html>
<head>
<title>tachiage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/handy.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="mybox">
	<form action="tachiage_fin.php" method="post" class="myform">
		<legend class="mycorner"><h3>テーブル<br class="sp-only">立ち上げ</h3></legend>
		<div class="sub-box">
			テーブル:<select name="table_name" class="form-control">
				<option value="tables">テーブルを選択</option>
				<option value="table_name1" {if '1' == $seat}selected{/if}>空席1</option>
				<option value="table_name2" {if '2' == $seat}selected{/if}>空席2</option>
				<option value="table_name3" {if '3' == $seat}selected{/if}>空席3</option>
				<option value="table_name2" {if '4' == $seat}selected{/if}>空席A</option>
				<option value="table_name2" {if '5' == $seat}selected{/if}>空席B</option>
				<option value="table_name2" {if '6' == $seat}selected{/if}>空席C</option>
			</select>
			数人:<input type="number" name="count" class="form-control"><br>
			<br>
			<input type="submit" name="button" value="使用" class="btn btn-primary btn-lg btn-block">
		</div>
	</form>
	<div class="qr" ><button class="btn btn-primary btn-lg mt-4">QR</button></div>
</div>
</body>
</html>