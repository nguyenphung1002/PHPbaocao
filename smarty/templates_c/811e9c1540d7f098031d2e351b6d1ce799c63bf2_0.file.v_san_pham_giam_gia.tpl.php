<?php
/* Smarty version 3.1.30, created on 2024-03-07 02:51:16
  from "C:\xampp\htdocs\shophoa\views\trang_chu\v_san_pham_giam_gia.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65e91d945d7895_51976866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '811e9c1540d7f098031d2e351b6d1ce799c63bf2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shophoa\\views\\trang_chu\\v_san_pham_giam_gia.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e91d945d7895_51976866 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 custom-product custom1">
  <div class= "zvwqfjykbn magicproduct mage-custom">
    <div class="block-title-tabs">
      <ul class="magictabs">
        <li class="item active loaded single">
          <span class ="title">Giảm giá nhiều nhất</span>
        </li>
      </ul>
    </div>
    <div class="content-products">
      <div class="mage-magictabs mc-saleproduct">
        <ul class="flexisel-content products-grid saleproduct zoomOut play">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['san_pham_giam_gia']->value, 'giam_gia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['giam_gia']->value) {
?>
          <li data-aos="fade-up"data-aos-duration="600">
            <div class="per-product clearfix">
              <div class="images-container">
                <div class="product-hover">
                  <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['giam_gia']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['giam_gia']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['giam_gia']->value->TenHoa;?>
" class="product-image">
                    <img class="img-responsive hinh_san_pham" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['giam_gia']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['giam_gia']->value->TenHoa;?>
" />
                  </a>
                </div>
              </div>
              <div class="products-textlink product-featured-custom clearfix">
                <h2 class="product-name">
                  <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['giam_gia']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['giam_gia']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['giam_gia']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['giam_gia']->value->TenHoa;?>
</a>
                </h2>
                <div class="price-box">
                  <p class="old-price">
                    <span class="price-label">Giá mới:</span>
                    <span class="price" id="product-price-2107">
              <?php echo number_format($_smarty_tpl->tpl_vars['giam_gia']->value->Gia);?>
  đ</span>
                  </p>
                  <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['giam_gia']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['giam_gia']->value > 'MaHoa';?>
.html" class="minimal-price-link">
                    <span class="label">Mua online:</span>
                    <span class="price" id="product-minimal-price-2107">
        <?php echo number_format($_smarty_tpl->tpl_vars['giam_gia']->value->GiaKhuyenMai);?>
   đ   </span>
                  </a>
                </div>
                <div class="actions"></div>
              </div>
            </div>
          </li>
          <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>


        </ul>
      </div>
    </div>
    <!-- MAP -->
    <!-- MAP -->
  </div>

</div>
<?php }
}
