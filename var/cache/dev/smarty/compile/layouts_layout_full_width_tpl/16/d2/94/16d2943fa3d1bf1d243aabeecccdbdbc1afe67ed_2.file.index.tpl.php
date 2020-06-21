<?php
/* Smarty version 3.1.33, created on 2020-06-21 19:44:46
  from 'D:\wamp65\www\presta\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eef9c8e04d686_92936511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16d2943fa3d1bf1d243aabeecccdbdbc1afe67ed' => 
    array (
      0 => 'D:\\wamp65\\www\\presta\\themes\\classic\\templates\\index.tpl',
      1 => 1587033346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eef9c8e04d686_92936511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6713035455eef9c8e040877_70861208', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_9598369935eef9c8e042672_61311913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2812450865eef9c8e046e05_98632024 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_15638811345eef9c8e045128_50512910 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2812450865eef9c8e046e05_98632024', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6713035455eef9c8e040877_70861208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_6713035455eef9c8e040877_70861208',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9598369935eef9c8e042672_61311913',
  ),
  'page_content' => 
  array (
    0 => 'Block_15638811345eef9c8e045128_50512910',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2812450865eef9c8e046e05_98632024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9598369935eef9c8e042672_61311913', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15638811345eef9c8e045128_50512910', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
