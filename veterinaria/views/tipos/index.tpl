<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    {$title}
                    <a href="{$_layoutParams.root}tipos/add" class="btn btn-outline-success btn-sm">Crear Tipo de Servicio</a>
                </h3>

                {include file="../partials/_mensajes.tpl"}

                {if isset($tipos) && count($tipos)}
                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Tipo de Servicio</th>
                        </tr>
                        {foreach from=$tipos item=tipo}
                            <tr>
                                <td>{$tipo.id}</td>
                                <td>
                                    <a href="{$_layoutParams.root}tipos/view/{$tipo.id}">{$tipo.nombre}</a>
                                </td>
                            </tr>
                        {/foreach}
                    </table>
                {else}
                    <p class="text-info">No hay tipos de servicios registrados</p>
                {/if}
            </div>
        </div>
    </div>
</section> <!-- .section -->