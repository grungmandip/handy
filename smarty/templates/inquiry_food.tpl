

<html>
<head><title></title></head>
<body>

{if 0 < $error_detail_count}
    <div style="color: red;">エラーがあります</div>
{/if}


{if true == $error_detail.error_must_name}
    <div style="color: red;">フード名は必要です。</div>
{/if}





  <form action="./inquiry_food_fin.php" method="post">
    フードの追加<br>
    名前:<input type="text" name="name" value="{$input.name}"><br>
    
    変更:<input type="change" name="change" value=""><br>
    
    <button>入力する</button>
  </form>
</body>
</html>