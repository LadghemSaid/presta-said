<?php
/* Smarty version 3.1.33, created on 2020-06-21 19:37:51
  from 'D:\wamp65\www\presta\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eef9aef878b02_49923335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86fdcacadfffbb07fdf17007aa5387090d403803' => 
    array (
      0 => 'D:\\wamp65\\www\\presta\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1587033346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eef9aef878b02_49923335 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
