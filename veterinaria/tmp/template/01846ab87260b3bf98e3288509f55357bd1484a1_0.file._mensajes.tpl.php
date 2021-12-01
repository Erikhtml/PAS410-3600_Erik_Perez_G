<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-29 13:44:51
  from 'C:\wamp64\www\veterinaria\views\partials\_mensajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61a4d95301f5d6_73133238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01846ab87260b3bf98e3288509f55357bd1484a1' => 
    array (
      0 => 'C:\\wamp64\\www\\veterinaria\\views\\partials\\_mensajes.tpl',
      1 => 1636422695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a4d95301f5d6_73133238 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['_error']->value))) {?>
    <div style="margin-top: 40px;"></div>
    <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['_mensaje']->value))) {?>
    <div style="margin-top: 40px;"></div>
    <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
<?php }
}
}
