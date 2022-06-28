
<div class="mt-5">
    <center>
    <h3 class="display-4">Registrar Paciente</h3>

    <div class="mt-5">

        <form action="<?php echo getUrl("Paciente","Paciente","postInsert");?>" method="POST">
    
        
        
        <table>
            <tr>
           <th><font face="Calibri">Documento</font></th> 
           <th><font face="Calibri">Nombre</font></th>
           <th><font face="Calibri">Apellido</font></th>
            </tr>

         <tr>
            <th>   <input type="text" name="pac_documento" class="form-control" placeholder="Documento" required="required"></th>
            <th>  <input type="text" name="pac_nombre" class="form-control" placeholder="Nombres" required="required"></th>
            <th> <input type="text" name="pac_apellido" class="form-control" placeholder="Apellidos" required="required"></th>
            </tr>   
        </table>
        <br>
        <table>
        <tr>
            <th><font face="Calibri">Direccion</font></th>
            <th><font face="Calibri">Telefono</font></th>
            <th><font face="Calibri">Correo</font></th>
        </tr>
        <tr>
        <th><input type="text" name="pac_direccion" class="form-control" placeholder="Dirección" required="required">
            </th>
            <th> <input type="number" name="pac_telefono" class="form-control" placeholder="Teléfono" required="required">
           </th>
             <th> <input type="mail" name="pac_correo" class="form-control" placeholder="correo" required="required">
            </th>
        </tr>
    
      <tr>
          
            <td>
            <label class="form-label"><b>Hobbies</b></label><br>    
            <?php foreach($hobbies as $hob){?>
                <label><input type="checkbox" name="hobbie[]" value="<?php echo $hob['hob_id']; ?>"><?php echo $hob['hob_nombre']; ?></label><br>
                <?php } ?>
        </td>
        <td>
                    <div class="row-md-4">
                    <center><label class="form-label"><b>Generos</b></label></center>
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
             <br> <label class="form-label"><b>Estratos</b></label><br>
         <?php foreach($estratos as $estr){?>
         
                <label><input type="radio" name="estr_id" value="<?php echo $estr['estr_id']; ?>"><?php echo $estr['estr_nombre']; ?></label><br>
                <?php } ?>
            </td>
        </tr>
        </table> 
        <br>

        </div>  
        

        <div>
    
  
            <input type="submit" value="Enviar" class="btn btn-success mt-2">
        </div>
    </div>
    
    </form>
    </center>
</div>  