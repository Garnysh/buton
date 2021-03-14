<?php /* Smarty version Smarty-3.1.6, created on 2021-03-07 04:23:52
         compiled from "../views/default\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214428378560442876402c03-62308411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76efe512959f670dcfbe2dc8447081a8ad91a48b' => 
    array (
      0 => '../views/default\\category.tpl',
      1 => 1615080205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214428378560442876402c03-62308411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_60442876497bb',
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60442876497bb')) {function content_60442876497bb($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<div>
			<img src="../public/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" width="100"/>
        </a><br />
        <a href="../public/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    </div>
<?php } ?>


<?php }} ?>