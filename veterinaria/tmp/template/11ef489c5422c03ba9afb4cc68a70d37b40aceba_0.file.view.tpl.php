<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-01 19:50:47
  from 'C:\wamp64\www\veterinaria\views\tipos\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61a7d217e22d03_47150868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ef489c5422c03ba9afb4cc68a70d37b40aceba' => 
    array (
      0 => 'C:\\wamp64\\www\\veterinaria\\views\\tipos\\view.tpl',
      1 => 1638388219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61a7d217e22d03_47150868 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <table class="table table-hover">
                    <tr>
                        <th>Id:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
</td>
                    </tr>
                    <tr>
                        <th>Tipo de Servicio:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value['nombre'];?>
</td>
                    </tr>
                </table>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipos/edit/<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Editar</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipos/delete/<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Eliminar</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipos/" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
