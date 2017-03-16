<?php
/* Smarty version 3.1.30, created on 2017-03-16 16:19:04
  from "C:\xampp\htdocs\patrick\zcm\views\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58caace89bc237_27679777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3133a0b1786a9a904aa2dab9847340a8aabedab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\patrick\\zcm\\views\\home.tpl',
      1 => 1489677541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_58caace89bc237_27679777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71807184158caace89bace8_92798882', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173375968258caace89bbd02_61553332', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_71807184158caace89bace8_92798882 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_173375968258caace89bbd02_61553332 extends Smarty_Internal_Block
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
