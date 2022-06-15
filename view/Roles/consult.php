<div class="mt-5">
    <h3 class="display-4">Consultar Roles</h3>
</div>
<div class="mt-5">
    <table id="lol" class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Roles</th>
                <th>Editar</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($roles as $rol) {
                    echo "<tr>";
                    echo "<td>".$rol['rol_id']."</td>";
                    echo "<td>".$rol['rol_nombre']."</td>";
                    

                    //boton de editar
                    echo "<td><a href='".getUrl("roles","roles","getUpdate",array("rol_id"=>$rol['rol_id']))."'><button class='btn btn-primary'>Editar</button> </a> </td>";

                    //boton de eliminar
                    echo "<td> <a href='".getUrl("Roles","Roles","getDelete",array("rol_id"=>$rol['rol_id']))."'><button class='btn btn-danger'>Eliminar</button> </a> </td>";

                    echo"<td> </td>";
                echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>