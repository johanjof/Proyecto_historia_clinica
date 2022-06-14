<div class="mt-5">
    <h3 class="display-4">Consultar Paciente</h3>
</div>
<div class="mt-5">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tel</th>
                <th></th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($paciente as $pac ) {
                    echo "<tr>";
                    echo "<td>".$pac['pac_id']."</td>";
                    echo "<td>".$pac['pac_nombre']."</td>";
                    echo "<td>".$pac['pac_apellido']."</td>";
                    echo "<td>".$pac['pac_telefono']."</td>";
                    

                    //boton de editar
                    echo "<td><a href='".getUrl("paciente","paciente","getUpdate",array("pac_id"=>$pac['pac_id']))."'><button class='btn btn-primary'>Editar</button> </a> </td>";

                    //boton de eliminar
                    echo "<td> <a href='".getUrl("Paciente","Paciente","getDelete",array("pac_id"=>$pac['pac_id']))."'><button class='btn btn-danger'>Eliminar</button> </a> </td>";

                    //boton de ver detalle
                    echo "<td> <a href='".getUrl("Paciente","Paciente","verDetalle",array("pac_id"=>$pac['pac_id']))."'><button class='btn btn-warning'>Ver Detalle</button> </a> </td>";

                    echo"<td> </td>";
                echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>