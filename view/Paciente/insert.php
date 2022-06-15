<center><div class="mt-5">
    <h3 class="display-4">Registrar Pacientes</h3>
</div>

<table style="margin: 80px;">
    <div class="mt-5">
        <form action="<?php echo getUrl("Pacientes","Pacientes","postInsert");?>" method="post">
            <tr class="col">
                <td>
                    <div class="row-md-4">
                        
                        <label class="form-label">Documento</label>
                        <input type="text" name="pac_id" class="form-control" placeholder="Ingrese El documento">
                    </div>
                </td>
            
                <td>
                    <div class="row-md-4">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="pac_nombre" class="form-control" placeholder="Ingrese El Nombre" >
                    </div>
                </td>

                <td>
                    <div class="row-md-4">
                        <label class="form-label">Apellido</label>
                        <input type="text" name="pac_apellido" class="form-control" placeholder="Ingrese El Apellido">
                    </div>
                </td>
            </tr>

            <tr>

                <td>
                    <div class="row-md-4">
                        <label class="form-label">Direccion</label>
                        <input type="text" name="pac_direccion" class="form-control" placeholder="Ingrese La Direccion">
                    </div>
                </td>

                <td>
                    <div class="row-md-4">
                        <label class="form-label">Telefono</label>
                        <input type="text" name="pac_telefono" class="form-control" placeholder="Ingrese El Telefono">
                    </div>
                </td>

                <td>
                    <div class="row-md-4">
                        <label class="form-label">Correo</label>
                        <input type="text" name="pac_correo" class="form-control" placeholder="Ingrese El Correo">
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="form-check form-check-inline">
                        <label class="form-label">Hobbies</label><br>
                    <?php 
                        foreach ($hobbies as $hob){
                    ?>
                        <label><input name="pac_hob_id" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?php echo $hob['hob_id']; ?>"><?php echo $hob['hob_nombre']; ?></label><br>
                    <?php 
                        }
                    ?>
                    </div>
                </td>

                <td>
                    <div class="row-md-4">
                    <center><label class="form-label">genero</label></center>
                            <select name="pac_gen" class="form-control" required="required">
                                <option value="">Seleccione....</option>
                            <?php
                                foreach ($genero as $gen){
                                    echo "<option value='".$gen['gen_id']."'>".$gen['gen_nombre']."</option>";
                                }
                            ?>
                            </select>
                    </div>
                </td>

                <td style="float: right;">
                    <div class="form-check form-check-inline">
                        <label class="form-label">Estrato</label><br>
                            <?php 
                                foreach ($estrato as $est){
                            ?>
                        <label><input name="pac_estra" class="form-check-input" type="radio" id="inlineCheckbox1" value="<?php echo $est['estra_id']; ?>"><?php echo $est['estra_nombre']; ?></label><br>
                            <?php 
                                }
                            ?>
                    </div>
                </td>
                
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            
        
        
        
    </form>
    </div>
</table>
</center>