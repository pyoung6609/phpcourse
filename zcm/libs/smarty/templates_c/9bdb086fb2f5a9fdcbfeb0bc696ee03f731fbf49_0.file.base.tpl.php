<?php
/* Smarty version 3.1.30, created on 2017-03-21 16:19:04
  from "C:\xampp\htdocs\phplocal\zcm\views\base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d14468e29115_90177194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bdb086fb2f5a9fdcbfeb0bc696ee03f731fbf49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phplocal\\zcm\\views\\base.tpl',
      1 => 1489677573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d14468e29115_90177194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80432366358d14468e27db8_89559217', 'title');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17209835458d14468e28a06_42919680', 'body');
?>

</div>
</body>
</html><?php }
/* {block 'title'} */
class Block_80432366358d14468e27db8_89559217 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17209835458d14468e28a06_42919680 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
