<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-29 13:47:13
  from 'C:\wamp64\www\veterinaria\views\tipos\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61a4d9e1a57080_12125832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33e80ace9399d4d62489ded1a95411fc1e838c54' => 
    array (
      0 => 'C:\\wamp64\\www\\veterinaria\\views\\tipos\\delete.tpl',
      1 => 1637858636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../tipos/_form.tpl' => 1,
  ),
),false)) {
function content_61a4d9e1a57080_12125832 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                
                <?php $_smarty_tpl->_subTemplateRender("file:../tipos/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
