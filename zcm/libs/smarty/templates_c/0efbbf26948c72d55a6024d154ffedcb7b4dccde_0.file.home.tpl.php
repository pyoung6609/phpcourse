<?php
/* Smarty version 3.1.30, created on 2017-03-21 18:55:10
  from "C:\xampp\htdocs\phplocal\zcm\views\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d168fe597b03_10607485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0efbbf26948c72d55a6024d154ffedcb7b4dccde' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phplocal\\zcm\\views\\home.tpl',
      1 => 1489677541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_58d168fe597b03_10607485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127506454758d168fe596507_86393404', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113754479758d168fe597584_17119194', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_127506454758d168fe596507_86393404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_113754479758d168fe597584_17119194 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Welcome to the ZeoLearn Course Manager</h1>
<p>Look around at our courses or sign up to register for a course!</p>
<?php
}
}
/* {/block 'body'} */
}
