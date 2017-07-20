<?php
/* Smarty version 3.1.30, created on 2017-07-13 15:04:38
  from "/var/www/html/maharajan/myproj/smarty/templates/inquiry_food.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59670d7619a6a2_75827505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '862b0676e12e499663521ed8daf2b3bd3d136a9c' => 
    array (
      0 => '/var/www/html/maharajan/myproj/smarty/templates/inquiry_food.tpl',
      1 => 1499925857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59670d7619a6a2_75827505 (Smarty_Internal_Template $_smarty_tpl) {
?>


<html>
<head><title></title></head>
<body>

<?php if (0 < $_smarty_tpl->tpl_vars['error_detail_count']->value) {?>
    <div style="color: red;">エラーがあります</div>
<?php }?>


<?php if (true == $_smarty_tpl->tpl_vars['error_detail']->value['error_must_name']) {?>
    <div style="color: red;">フード名は必要です。</div>
<?php }?>





  <form action="./inquiry_food_fin.php" method="post">
    フードの追加<br>
    名前:<input type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><br>
    
    変更:<input type="change" name="change" value=""><br>
    
    <button>入力する</button>
  </form>
</body>
</html><?php }
}
