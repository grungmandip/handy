<?php
/* Smarty version 3.1.30, created on 2017-07-13 13:53:51
  from "/var/www/html/maharajan/myproj/smarty/templates/smarty_test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5966fcdfe635a5_97410460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee15c366b793af64ef887e90f880867dae7a7951' => 
    array (
      0 => '/var/www/html/maharajan/myproj/smarty/templates/smarty_test.tpl',
      1 => 1499921621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5966fcdfe635a5_97410460 (Smarty_Internal_Template $_smarty_tpl) {
?>

Smartyテスト<br>
入力去れた文字は"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"です。
連続配列の場合、<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ar']->value['a'], ENT_QUOTES, 'UTF-8');?>
や<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ar']->value['b'], ENT_QUOTES, 'UTF-8');?>
です。
<?php }
}
