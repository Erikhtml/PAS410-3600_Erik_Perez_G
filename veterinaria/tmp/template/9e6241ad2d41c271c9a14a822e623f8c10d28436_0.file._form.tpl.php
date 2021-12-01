<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-29 13:45:02
  from 'C:\wamp64\www\veterinaria\views\tipos\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61a4d95ecd2d23_15990803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e6241ad2d41c271c9a14a822e623f8c10d28436' => 
    array (
      0 => 'C:\\wamp64\\www\\veterinaria\\views\\tipos\\_form.tpl',
      1 => 1637787509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a4d95ecd2d23_15990803 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="mb-3">
        <label for="name" class="label text-success" style="font-weight: bold; font-size: 14px;">Nombre <span
                class="text-danger">*</span></label>
        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['tipo']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id=""
            aria-describedby="" placeholder="Nombre del Servicio">
    </div>
    <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
    <button type="submit" class="btn btn-outline-success"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</button>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" class="btn btn-outline-primary">Volver</a>
</form><?php }
}
