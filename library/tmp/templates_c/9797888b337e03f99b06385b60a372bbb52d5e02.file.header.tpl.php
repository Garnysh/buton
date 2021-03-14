<?php /* Smarty version Smarty-3.1.6, created on 2021-03-07 11:55:40
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1149785369604425da34d2f9-62174468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1615107311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1149785369604425da34d2f9-62174468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_604425da3c9be',
  'variables' => 
  array (
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604425da3c9be')) {function content_604425da3c9be($_smarty_tpl) {?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" href="../public/css/main.css" type="text/css" />
		<script type="text/javascript" src="../public/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../public/js/main.js"></script>
    </head>    
<body>
	<div id="header">
		<h1>Bu-ton</h1>
	</div>
	
	
 <?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   	

	
<div id="centerColumn"><?php }} ?>