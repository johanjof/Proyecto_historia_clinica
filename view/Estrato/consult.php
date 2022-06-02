<div class="mt-5">
    <h3 class="display-4">Consultar Estratos</h3>
</div>
<div class="mt-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Estratos</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($estratos as $estr){
                ?>
                <tr>
                <td><?php echo $estr['estr_id']; ?></td>
                <td><?php echo $estr['estr_nombre']; ?></td>
                <td><a href="<?=geturl('Estrato', 'Estrato', 'getUpdate', array('estr_id'=>$estr['estr_id']))?>"><button class='btn btn-info'>Editar</button></a></td>
                <td><a href="<?=geturl('Estrato', 'Estrato', 'getDelete', array('estr_id'=>$estr['estr_id']))?>"><button class='btn btn-danger'>Eliminar</button></a></td>
    
                <td></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>