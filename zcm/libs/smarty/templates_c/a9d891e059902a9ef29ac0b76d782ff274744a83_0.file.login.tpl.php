<?php
/* Smarty version 3.1.30, created on 2017-03-15 19:53:24
  from "C:\xampp\htdocs\patrick\zcm\views\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c98da491f483_33707066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d891e059902a9ef29ac0b76d782ff274744a83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\patrick\\zcm\\views\\login.tpl',
      1 => 1489603998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c98da491f483_33707066 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head></head>
	<body>
		<form method="post" action="auth.php" enctype="multipart/form-data">
			<label>Username</label>
		    <input type="text" name="username"/>
		    <label>Password</label>
		    <input type="password" name="password" />
		    <input type="submit" value="Submit" />
		</form>
	</body>
</html><?php }
}
