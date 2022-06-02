<div class="mt-5">
    <h3 class="display-4">Consultar Usuario</h3>
</div>

<div class="mt-5">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($usuarios as $usu) {
                echo "<tr>";
                echo "<td>".$usu['usu_id']."</td>";
                echo "<td>".$usu['usu_docum']."</td>";
                echo "<td>".$usu['rol_nombre']."</td>";

                echo "<td><a href='".getUrl("Usuario","Usuario","getUpdate",array
                    ("usu_id"=>$usu['usu_id']))."'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td></td>";
                
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
</div>