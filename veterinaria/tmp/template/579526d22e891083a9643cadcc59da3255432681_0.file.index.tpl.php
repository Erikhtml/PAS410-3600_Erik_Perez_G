<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-29 13:44:50
  from 'C:\wamp64\www\veterinaria\views\tipos\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61a4d952f2e279_82835714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '579526d22e891083a9643cadcc59da3255432681' => 
    array (
      0 => 'C:\\wamp64\\www\\veterinaria\\views\\tipos\\index.tpl',
      1 => 1638191781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61a4d952f2e279_82835714 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipos/add" class="btn btn-outline-success btn-sm">Crear Tipo de Servicio</a>
                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['tipos']->value)) && count($_smarty_tpl->tpl_vars['tipos']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Tipo de Servicio</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipos/view/<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value['nombre'];?>
</a>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay tipos de servicios registrados</p>
                <?php }?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
