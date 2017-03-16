<?php
/* Smarty version 3.1.30, created on 2017-03-16 17:10:11
  from "C:\xampp\htdocs\patrick\zcm\views\courses.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cab8e31e6928_38715654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b3afe8644e7c51e02438d882dbebe8b66e39337' => 
    array (
      0 => 'C:\\xampp\\htdocs\\patrick\\zcm\\views\\courses.tpl',
      1 => 1489680606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_58cab8e31e6928_38715654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117957677858cab8e31e3e47_66925401', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72676363358cab8e31e5ac3_58098860', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_117957677858cab8e31e3e47_66925401 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Courses<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_72676363358cab8e31e5ac3_58098860 extends Smarty_Internal_Block
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
	
</tbody>
</table>
<?php
}
}
/* {/block 'body'} */
}
