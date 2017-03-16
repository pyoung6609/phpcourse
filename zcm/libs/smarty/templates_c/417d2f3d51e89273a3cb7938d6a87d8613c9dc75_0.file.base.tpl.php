<?php
/* Smarty version 3.1.30, created on 2017-03-16 16:19:35
  from "C:\xampp\htdocs\patrick\zcm\views\base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58caad07b434c6_22469293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '417d2f3d51e89273a3cb7938d6a87d8613c9dc75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\patrick\\zcm\\views\\base.tpl',
      1 => 1489677573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58caad07b434c6_22469293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1084476658caad07b423d9_66262273', 'title');
?>
</title>
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Zeo User Manager</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="courses.php">Courses</a></li>
			<!-- <li><a href="add_user.php">Add User</a></li>
			<li><a href="get_users.php">Users</a></li> -->
		</ul>
	</div>
</nav>
<div class="container-fluid">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26817799758caad07b42f85_34689132', 'body');
?>

</div>
</body>
</html><?php }
/* {block 'title'} */
class Block_1084476658caad07b423d9_66262273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_26817799758caad07b42f85_34689132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
