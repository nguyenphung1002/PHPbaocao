<?php
/* Smarty version 3.1.30, created on 2024-03-07 03:02:25
  from "C:\xampp\htdocs\shophoa\admin\smarty\templates\layout_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65e920311bf394_17266929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2141db6a525735cd3890367974e65be200e98019' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shophoa\\admin\\smarty\\templates\\layout_dang_nhap.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/head.tpl' => 1,
    'file:layouts/body_dang_nhap.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_65e920311bf394_17266929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/body_dang_nhap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
