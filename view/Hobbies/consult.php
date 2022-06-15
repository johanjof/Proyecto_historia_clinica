<div class="mt-5">
    <h3 class="display-4">Consultar Hobbies</h3>
</div>
<div class="mt-5">
    <table id="lol" class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Hobbies</th>
                <th>Editar</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($hobbies as $hob) {
                    echo "<tr>";
                    echo "<td>".$hob['hob_id']."</td>";
                    echo "<td>".$hob['hob_nombre']."</td>";
                    

                    //boton de editar
                    echo "<td><a href='".getUrl("hobbies","hobbies","getUpdate",array("hob_id"=>$hob['hob_id']))."'><button class='btn btn-primary'>Editar</button> </a> </td>";

                    //boton de eliminar
                    echo "<td> <a href='".getUrl("Hobbies","Hobbies","getDelete",array("hob_id"=>$hob['hob_id']))."'><button class='btn btn-danger'>Eliminar</button> </a> </td>";

                    echo"<td> </td>";
                echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>