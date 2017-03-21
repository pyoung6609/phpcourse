<?php
/* Smarty version 3.1.30, created on 2017-03-21 18:47:02
  from "C:\xampp\htdocs\phplocal\zcm\views\courses.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d1671643e152_40485774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf4dbe984d23844121e944999592eaadbe6c1b16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phplocal\\zcm\\views\\courses.tpl',
      1 => 1490118420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_58d1671643e152_40485774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169710100558d16716430b48_20465173', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45599027358d1671643d221_40022405', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_169710100558d16716430b48_20465173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Courses<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_45599027358d1671643d221_40022405 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table>
<thead>
	<tr>
		<td>Course Name</td>
		<td>Course Category</td>
	</tr>
</thead>
<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['course']->value, 'courses');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['courses']->value) {
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['courses']->value->getTitle();?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['courses']->value->getCategoryId();?>
</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
</tbody>
</table>
<?php
}
}
/* {/block 'body'} */
}
