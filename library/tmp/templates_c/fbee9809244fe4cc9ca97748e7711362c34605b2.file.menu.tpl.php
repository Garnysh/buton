<?php /* Smarty version Smarty-3.1.6, created on 2021-03-07 04:10:09
         compiled from "../views/default\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2009948418604425da495e88-79835559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbee9809244fe4cc9ca97748e7711362c34605b2' => 
    array (
      0 => '../views/default\\menu.tpl',
      1 => 1615079406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2009948418604425da495e88-79835559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_604425da5b4fa',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'arUser' => 0,
    'hideLoginBox' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604425da5b4fa')) {function content_604425da5b4fa($_smarty_tpl) {?>   <div id='menu'>
       <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?> 
         <a href="../public/?controller=category&url=<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
        <?php } ?>
	

<?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
	<div id="userBox">
		<a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br />
		<a href="/user/logout/" onclick="logout();">Выход</a>
	</div>
		
<?php }else{ ?>
	
	<div id="userBox" class="hideme">
		<a href="#" id="userLink"></a><br />
		<a href="/user/logout/" onclick="logout();">Выход</a>
	</div>

	<?php if (!isset($_smarty_tpl->tpl_vars['hideLoginBox']->value)){?>
		<div id="loginBox">
			<div class="menuCaption">Авторизация</div>
			<input type="text" id="loginEmail" name="loginEmail" value=""/><br />
			<input type="password" id="loginPwd" name="loginPwd" value=""/><br />
			<input type="button" onclick="login();" value="Войти"/>
		</div>

		<div id="registerBox">
			<div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
			<div id="registerBoxHidden">
				email:<br />
				<input type="text" id="email" name="email" value=""/><br />
				пароль: <br />
				<input type="password" id="pwd1" name="pwd1" value=""/><br />
				повторить пароль:<br />
				<input type="password" id="pwd2" name="pwd2" value=""/><br />
				<input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/>
			</div>
		</div>
	<?php }?>
<?php }?>



   <a href="../views/default/cart.tpl">В корзине</a>
    <span id="cartCntItems">
        <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?><?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?>0<?php }?>
    </span>


    </div><?php }} ?>