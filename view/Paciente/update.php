<div class="mt-5">
    <center>
    <h3 class="display-4">Editar Paciente</h3>
</div>

<div class="mt-5">
    <?php
        foreach($paciente as $pac){
    ?>
    <form action="<?php echo getUrl("Paciente","Paciente","postUpdate");?>" method="POST">
<center>
<table>
            <tr>
           <th><font face="Calibri">Documento</font></th> 
           <th><font face="Calibri">Nombre</font></th>
           <th><font face="Calibri">Apellido</font></th>
            </tr>

         <tr>
            <input type="hidden" name="pac_id" value="<?=$pac['pac_id']?>">
            <th>   <input type="text"  name="pac_documento" class="form-control" placeholder="Documento"  value="<?php echo $pac['pac_documento'];?>"></th>
            <th>  <input type="text"  name="pac_nombre" class="form-control" placeholder="Nombres" value="<?php echo $pac['pac_nombre'];?>" ></th>
            <th> <input type="text"  name="pac_apellido" class="form-control" placeholder="Apellidos" value="<?php echo $pac['pac_apellido'];?>"></th>
            </tr>   
        </table>

        <table>
        <tr>
            <th><font face="Calibri">Direccion</font></th>
            <th><font face="Calibri">Telefono</font></th>
            <th><font face="Calibri">Correo</font></th>
        </tr>
        <tr>
        <th><input type="text"  name="pac_direccion" class="form-control" placeholder="Dirección" value="<?php echo $pac['pac_direccion'];?>">
            </th>
            <th> <input type="number"  name="pac_telefono" class="form-control" placeholder="Teléfono" required="required" value="<?php echo $pac['pac_telefono'];?>">
           </th>
             <th> <input type="mail"  name="pac_correo" class="form-control" placeholder="correo" required="required" value="<?php echo $pac['pac_correo'];?>">
            </th>
        </tr>

        <tr>
            <td>

            <label class="form-label"><b>Hobbies</b></label><br> 
            <?php foreach($paciente_hob as $ph){?>

                <label>

                    <?php
                        $check=$ph['chulo'];
                    ?>
                   <input type="checkbox" <?php echo $check ?> name="hobbie[]" value="<?php echo $ph['hob_id']; ?>"><?php echo $ph['hob_nombre']."<br>"; 
                        }
                    ?> 
                </label><br> 
        </td> 

        <td>
                    <div class="row-md-4">
                    <center><label class="form-label"><b>Genero</b></label></center>
                            <select name="gen_id" class="form-control" required="required">
                                <option value="">Seleccione....</option>
                            <?php
                                foreach ($generos as $gen){
                                    if ($gen['gen_id']==$pac['gen_id']) {
                                        $select="selected";
                                    }else{
                                        $select="";
                                    }
                                    echo "<option value='".$gen['gen_id']."'$select>".$gen['gen_nombre']."</option>";
                                }
                                    
                                
                            ?>
                            </select>
                    </div>
                </td>

                <td>
              <label class="form-label"><b>Estratos</b></label><br>

         <?php foreach($estratos as $estr){?>
                <label>

                 <?php
                        if ($estr['estr_id']==$pac['estr_id']) {
                        $check="checked";
                            }else{
                                $check="";
                            }
                           
                       
                    ?>
                    <input type="radio" <?php echo $check ?> name="estr_id" value="<?php echo $estr['estr_id'];?>"> 

                    <?php
                        echo $estr['estr_nombre']."<br>"; 
                        }
                    ?>
                
                   
                </label><br>
               
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