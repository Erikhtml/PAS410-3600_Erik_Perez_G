
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    {$title}
                </h3>

                {include file="../partials/_mensajes.tpl"}

                <table class="table table-hover">
                    <tr>
                        <th>Id:</th>
                        <td>{$tipo.id}</td>
                    </tr>
                    <tr>
                        <th>Tipo de Servicio:</th>
                        <td>{$tipo.nombre}</td>
                    </tr>
                </table>
                <p>
                    <a href="{$_layoutParams.root}tipos/edit/{$tipo.id}" class="btn btn-outline-primary btn-sm">Editar</a>
                    <a href="{$_layoutParams.root}tipos/delete/{$tipo.id}" class="btn btn-outline-primary btn-sm">Eliminar</a>
                    <a href="{$_layoutParams.root}tipos/" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>
            </div>
        </div>
    </div>
</section> <!-- .section -->