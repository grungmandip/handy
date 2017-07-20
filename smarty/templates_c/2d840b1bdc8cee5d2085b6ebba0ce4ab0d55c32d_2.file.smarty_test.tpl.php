<?php
/* Smarty version 3.1.30, created on 2017-07-04 14:39:37
  from "/home/maharajan/Inquiry/smarty/templates/smarty_test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595b2a19d1aba1_84429630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d840b1bdc8cee5d2085b6ebba0ce4ab0d55c32d' => 
    array (
      0 => '/home/maharajan/Inquiry/smarty/templates/smarty_test.tpl',
      1 => 1495532792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595b2a19d1aba1_84429630 (Smarty_Internal_Template $_smarty_tpl) {
?>

Smartyテスト<br>
入力去れた文字は"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"です。
連続配列の場合、<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ar']->value['a'], ENT_QUOTES, 'UTF-8');?>
や<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ar']->value['b'], ENT_QUOTES, 'UTF-8');?>
です。
<?php }
}
