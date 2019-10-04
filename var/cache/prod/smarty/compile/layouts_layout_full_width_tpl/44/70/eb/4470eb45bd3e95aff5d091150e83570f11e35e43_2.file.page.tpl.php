<?php
/* Smarty version 3.1.33, created on 2019-10-04 22:54:25
  from 'C:\xampp\htdocs\test_prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d976b310b4d81_92383762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4470eb45bd3e95aff5d091150e83570f11e35e43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test_prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1570203941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d976b310b4d81_92383762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1017924235d976b310aa5a4_76164478', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_12398567735d976b310abb97_94212750 extends Smarty_Internal_Block
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
class Block_8635267285d976b310aaef5_49111841 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12398567735d976b310abb97_94212750', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_14536629095d976b310b1222_00194567 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12252545945d976b310b1e59_36082814 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18898607735d976b310b0940_95442585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14536629095d976b310b1222_00194567', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12252545945d976b310b1e59_36082814', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_16172276735d976b310b38f2_73802866 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11127131205d976b310b3068_32427570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16172276735d976b310b38f2_73802866', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1017924235d976b310aa5a4_76164478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1017924235d976b310aa5a4_76164478',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8635267285d976b310aaef5_49111841',
  ),
  'page_title' => 
  array (
    0 => 'Block_12398567735d976b310abb97_94212750',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18898607735d976b310b0940_95442585',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14536629095d976b310b1222_00194567',
  ),
  'page_content' => 
  array (
    0 => 'Block_12252545945d976b310b1e59_36082814',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11127131205d976b310b3068_32427570',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16172276735d976b310b38f2_73802866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8635267285d976b310aaef5_49111841', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18898607735d976b310b0940_95442585', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11127131205d976b310b3068_32427570', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
