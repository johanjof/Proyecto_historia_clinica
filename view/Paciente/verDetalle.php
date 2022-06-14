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
                <th>Direccion</th>
                <th>Tel</th>
                <th>Genero</th>
                <th>Estrato</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($paciente as $pac ) {
                    echo "<tr>";
                    echo "<td>".$pac['pac_id']."</td>";
                    echo "<td>".$pac['pac_nombre']."</td>";
                    echo "<td>".$pac['pac_apellido']."</td>";
                    echo "<td>".$pac['pac_direccion']."</td>";
                    echo "<td>".$pac['pac_telefono']."</td>";
                    echo "<td>".$pac['gen_id']."</td>";
                    echo "<td>".$pac['estr_id']."</td>";
                }
            ?>
        </tbody>
    </table>
</div>