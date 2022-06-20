<div class="mt-5">
    <center>
    <h3 class="display-4">Eliminar Paciente</h3>
</div>

<div class="mt-5">
    <?php
        foreach($paciente as $pac){
    ?>
<center>
<table>
            <tr>
           <th><font face="Calibri">Documento</font></th> 
           <th><font face="Calibri">Nombre</font></th>
           <th><font face="Calibri">Apellido</font></th>
            </tr>

         <tr>
            <th>   <input type="text" name="pac_documento" class="form-control" placeholder="Documento" value="<?php echo $pac['pac_documento'];?>"></th>
            <th>  <input type="text" name="pac_nombre" class="form-control" placeholder="Nombres" value="<?php echo $pac['pac_nombre'];?>" ></th>
            <th> <input type="text" name="pac_apellido" class="form-control" placeholder="Apellidos" value="<?php echo $pac['pac_apellido'];?>"></th>
            </tr>   
        </table>

        <table>
        <tr>
            <th><font face="Calibri">Direccion</font></th>
            <th><font face="Calibri">Telefono</font></th>
            <th><font face="Calibri">Correo</font></th>
        </tr>
        <tr>
        <th><input type="text" name="pac_direccion" class="form-control" placeholder="Dirección" value="<?php echo $pac['pac_direccion'];?>">
            </th>
            <th> <input type="number" name="pac_telefono" class="form-control" placeholder="Teléfono" required="required" value="<?php echo $pac['pac_telefono'];?>">
           </th>
             <th> <input type="mail" name="pac_correo" class="form-control" placeholder="correo" required="required" value="<?php echo $pac['pac_correo'];?>">
            </th>
        </tr>

        <tr>
            <td><?php foreach($hobbies as $hob){?>
                <label><input type="checkbox" name="hobbies" value="<?php echo $hob['hob_nombre']; ?>"><?php echo $hob['hob_nombre']; ?></label><br>
                <?php } ?>
        </td>

        <td>
                    <div class="row-md-4">
                    <center><label class="form-label">genero</label></center>
                            <select name="gen_id" class="form-control" required="required">
                                <option value="">Seleccione....</option>
                            <?php
                                foreach ($generos as $gen){
                                    echo "<option value='".$gen['gen_id']."'>".$gen['gen_nombre']."</option>";
                                }
                            ?>
                            </select>
                    </div>
                </td>

                <td>
         <?php foreach($estratos as $estr){?>
                <label><input type="radio" name="estr_id" value="<?php echo $estr['estr_id']; ?>"><?php echo $estr['estr_nombre']; ?></label><br>
                <?php } ?>
            </td>
        </tr>
     
        

        
        </table>

<div class="col-md-4 mt-4">
    <input type="submit" value="Aceptar" class="btn btn-success">
</div>

    </div>
</form></center>
    <?php
        }
    ?>
</div>

</center>