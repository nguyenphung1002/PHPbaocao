<?php
/* Smarty version 3.1.30, created on 2024-03-07 02:52:00
  from "C:\xampp\htdocs\shophoa\views\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65e91dc0b74835_74783814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b2c5413ed3d44fd066a046cfaf72f0c964dfe6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shophoa\\views\\v_dang_nhap.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/dang_nhap/v_thanh_danh_muc.tpl' => 1,
    'file:views/dang_nhap/v_dang_nhap.tpl' => 1,
  ),
),false)) {
function content_65e91dc0b74835_74783814 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:views/dang_nhap/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:views/dang_nhap/v_dang_nhap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
