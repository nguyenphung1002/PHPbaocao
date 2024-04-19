<?php
/* Smarty version 3.1.30, created on 2024-03-07 03:02:07
  from "C:\xampp\htdocs\shophoa\views\v_lien_he.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65e9201f46a6f9_99507957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ade8c1a342a8cabb871c4c2be31ffe27cfc99919' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shophoa\\views\\v_lien_he.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e9201f46a6f9_99507957 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="bsm_contact">
  <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section" style="margin-top: 30px">
    <h1><?php echo $_smarty_tpl->tpl_vars['title_website']->value;?>
</h1>
      <img src="public/img/divider.png" alt="">
  </div>
</div>
<div class="container">
   <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="row">
           <div class="bsm_contact_content">
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="bsm_contact_image">
                       <img src="public/images/adress_icon.png" alt="">
                   </div>
                   <div class="bsm_contact_text">
                       <p><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</p>
                   </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="bsm_contact_image">
                       <img src="public/images/phone_icon.png" alt="">
                   </div>
                   <div class="bsm_contact_text">
                       <p><?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
</p>
                   </div>
               </div>
            </div>
      </div>
</div>
<?php }
}
