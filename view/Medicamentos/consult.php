<div class="mt-5">
    <h3 class="display-4">Consultar Medicamentos</h3>
</div>
<div class="mt-5">
    <table id="lol" class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Medicamentos</th>
                <th>Editar</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($medicamentos as $med) {
                    echo "<tr>";
                    echo "<td>".$med['med_id']."</td>";
                    echo "<td>".$med['med_nombre']."</td>";
                    

                    //boton de editar
                    echo "<td><a href='".getUrl("medicamentos","medicamentos","getUpdate",array("med_id"=>$med['med_id']))."'><button class='btn btn-primary'>Editar</button> </a> </td>";

                    //boton de eliminar
                    echo "<td> <a href='".getUrl("Medicamentos","Medicamentos","getDelete",array("med_id"=>$med['med_id']))."'><button class='btn btn-danger'>Eliminar</button> </a> </td>";

                    echo"<td> </td>";
                echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>