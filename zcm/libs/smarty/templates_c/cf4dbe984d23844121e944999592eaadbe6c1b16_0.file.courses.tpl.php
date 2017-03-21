<?php
/* Smarty version 3.1.30, created on 2017-03-21 16:42:38
  from "C:\xampp\htdocs\phplocal\zcm\views\courses.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d149ee4d4736_07411868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf4dbe984d23844121e944999592eaadbe6c1b16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phplocal\\zcm\\views\\courses.tpl',
      1 => 1490110957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_58d149ee4d4736_07411868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204623396858d149ee4c7633_57183263', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97172399758d149ee4d41a5_60755370', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_204623396858d149ee4c7633_57183263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Courses<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_97172399758d149ee4d41a5_60755370 extends Smarty_Internal_Block
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
		<td><?php echo $_smarty_tpl->tpl_vars['course']->value['title'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['course']->value['category_id'];?>
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
