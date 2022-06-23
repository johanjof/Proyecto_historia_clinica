<div class="mt-5">
    <center>
    <h3 class="display-4">Detalle Paciente</h3>
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
            <input type="hidden" name="pac_id" value="<?=$pac['pac_id']?>">
            <th>   <input type="text" readonly name="pac_documento" class="form-control" readonly value="<?php echo $pac['pac_documento'];?>"></th>
            <th>  <input type="text" readonly name="pac_nombre" class="form-control" value="<?php echo $pac['pac_nombre'];?>" ></th>
            <th> <input type="text" readonly name="pac_apellido" class="form-control" value="<?php echo $pac['pac_apellido'];?>"></th>
            </tr>   
        </table>

        <table>
        <tr>
            <th><font face="Calibri">Direccion</font></th>
            <th><font face="Calibri">Telefono</font></th>
            <th><font face="Calibri">Correo</font></th>
        </tr>
        <tr>
        <th><input type="text" readonly name="pac_direccion" class="form-control" value="<?php echo $pac['pac_direccion'];?>">
            </th>
            <th> <input type="number" readonly name="pac_telefono" class="form-control" required="required" value="<?php echo $pac['pac_telefono'];?>">
           </th>
             <th> <input type="mail" readonly name="pac_correo" class="form-control" required="required" value="<?php echo $pac['pac_correo'];?>">
            </th>
        </tr>
        </table>

        <?php
        }
    ?>
</div>

</center>
      
