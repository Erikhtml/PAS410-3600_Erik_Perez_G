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
                        <td>{$registros.id}</td>
                    </tr>
                    <tr>
                        <th>Usuario_id:</th>
                        <td>{$registros.usuario_id}</td>
                    </tr>
                    <tr>
                        <th>Ingreso:</th>
                        <td>{$registros.created_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                    </tr>
                    <tr>
                        <th>Salida:</th>
                        <td>{$registros.updated_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                    </tr>
                </table>
                <p>
                    <a href="{$_layoutParams.root}" class="btn btn-outline-primary">Enter</a>
                </p>
            </div>
        </div>
    </div>
</section> <!-- .section -->