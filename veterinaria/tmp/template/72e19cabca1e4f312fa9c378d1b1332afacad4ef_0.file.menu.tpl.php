<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-28 14:55:02
  from 'C:\wamp64\www\veterinaria\views\layout\default\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61cb4f76a814d9_68573378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72e19cabca1e4f312fa9c378d1b1332afacad4ef' => 
    array (
      0 => 'C:\\wamp64\\www\\veterinaria\\views\\layout\\default\\menu.tpl',
      1 => 1639861592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61cb4f76a814d9_68573378 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
	 	<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
"><span class="flaticon-pawprint-1 mr-2"></span>Veterinaria</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="fa fa-bars"></span> Menu
	  </button>
	  <div class="collapse navbar-collapse" id="ftco-nav">
	    <ul class="navbar-nav ml-auto">
			<?php if (((Session::get('autenticado') !== null ))) {?>
				<li class="nav-item active"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="nav-link"><?php echo Session::get('usuario_nombre');?>
</a></li>
			<?php }?>
	     	<li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="nav-link">Home</a></li>

			<?php if (((Session::get('autenticado') !== null ))) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Session::get('usuario_roles')->funcionarioRol, 'funcionarioRol');
$_smarty_tpl->tpl_vars['funcionarioRol']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['funcionarioRol']->value) {
$_smarty_tpl->tpl_vars['funcionarioRol']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['funcionarioRol']->value['rol']['nombre'] == 'Administrador(a)') {?>
						<li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
admin/" class="nav-link">Administración</a></li>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<?php }?>

			<?php if (!((Session::get('autenticado') !== null ))) {?>
				<li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login" class="nav-link">Login</a></li>
			<?php } else { ?>
				<li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/logout" class="nav-link">Logout</a></li>
			<?php }?>
	    </ul>
	  </div>
	</div>
</nav>



<?php }
}
