<?php
/* Smarty version 3.1.33, created on 2020-06-21 19:44:43
  from 'D:\wamp65\www\presta\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eef9c8b2cc515_02183964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5daa103d88d761dc1f28db2824295a380523a66' => 
    array (
      0 => 'D:\\wamp65\\www\\presta\\themes\\classic\\templates\\page.tpl',
      1 => 1587033346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eef9c8b2cc515_02183964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12734538595eef9c8b2b5974_80658314', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_5206722225eef9c8b2b9652_80567260 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_5288573275eef9c8b2b7444_44850477 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5206722225eef9c8b2b9652_80567260', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_10023211415eef9c8b2c0b90_11058832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_13555965715eef9c8b2c3175_24773008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5798440655eef9c8b2bf122_51976276 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10023211415eef9c8b2c0b90_11058832', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13555965715eef9c8b2c3175_24773008', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_6865519405eef9c8b2c8528_41881423 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15516935435eef9c8b2c6b47_26092755 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6865519405eef9c8b2c8528_41881423', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12734538595eef9c8b2b5974_80658314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12734538595eef9c8b2b5974_80658314',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_5288573275eef9c8b2b7444_44850477',
  ),
  'page_title' => 
  array (
    0 => 'Block_5206722225eef9c8b2b9652_80567260',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_5798440655eef9c8b2bf122_51976276',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10023211415eef9c8b2c0b90_11058832',
  ),
  'page_content' => 
  array (
    0 => 'Block_13555965715eef9c8b2c3175_24773008',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15516935435eef9c8b2c6b47_26092755',
  ),
  'page_footer' => 
  array (
    0 => 'Block_6865519405eef9c8b2c8528_41881423',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5288573275eef9c8b2b7444_44850477', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5798440655eef9c8b2bf122_51976276', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15516935435eef9c8b2c6b47_26092755', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
