<script>
	function myconfirm() {
		confirm("削除してもよろしいですか？");
	}
</script>
<div class= "mycontainer">
	<form action="tachiage_list.php" method="GET">
		<div class="mybox">
			<legend class="mycorner"><h3>ご来店お客様のリスト</h3></legend>
			<div class="sub-box">
				<div class="form-group">
					テーブル番:<input name="table_name" value="{$find_string.table_name}" class="form-control"><br>
					客数：<input name="count" value="{$find_string.count}" class="form-control"><br>
					時間：<input name="time" value="{$find_string.time}" class="form-control"><br>
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
{foreach from = $tachiage_list item=i}
				<tr>
					<td>{$i.table_name}</td>
					<td>{$i.count}</td>
					<td>{$i.createdOn}</td>
					<td><button class="btn btn-danger btn-sm" onclick="myconfirm()" value="$del_id.customer_id">削除</button></td>
				</tr>
{/foreach}
			</thead>
		</table>
	</form>
	<hr>
	<a href="top.php">Home</a>
</div>
