<div class="mt-5">
    
    <h3 class="display-16" style="margin-left:16% " >Informacion  Historia medica </h3>
</div>


<div class="mt-5">
    <?php
       
        foreach($historias as $hist){
    ?>
    
<center>

<div class="container">
  <div class="row">
    <div class="col col-4">
       <b>No. Historia Clinica</b>
    </div>
    <div class="col col-3"> 
    <b> Nombre</b>
    </div>
    <div class="col col-3">
     <b>Genero </b>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col col-4">
    <?=$hist['hist_id']?>
    </div>
    <div class="col col-3">
    <?php echo $hist['pac_nombre'];?>
    </div>
    <div class="col col-3">
    <?php
                                foreach ($generos as $gen){
                                    if ($gen['gen_id']==$hist['gen_id']) {
                                        echo $gen['gen_nombre'];
                                    }
                                  
                                    
                                }
                                    
                                
                            ?>
    </div>
  </div>
</div>


       

<hr>

<table>


        <tr>
            <th><font face="Calibri">Motivo de visita </font></th>
            <th><font face="Calibri">Esfera OD</font></th>
            <th><font face="Calibri">Cilindro OD</font></th>
        </tr>
        <tr>
        <input type="hidden" name="hist_id" value="<?=$hist['hist_id']?>">
        
        <th><input type="text" name="hist_motv" class="form-control" readonly value="<?php echo $hist['hist_motv'];?>"></th>
            </th>
            <th> <input type="number" name="hist_esfod" class="form-control" readonly value="<?php echo $hist['hist_esfod'];?>"></th>
           </th>
             <th>  <input type="number" name="hist_cilod" class="form-control" readonly value="<?php echo $hist['hist_cilod'];?>"></th>
            </th>
        </tr>
        </table>
        <table>
        <tr>
            <th><font face="Calibri">Eje OD</font></th>
            <th><font face="Calibri">Esfera OI</font></th>
            <th><font face="Calibri">Cilindro OI</font></th>
        </tr>
        <tr>
        <th><input type="number" name="hist_ejeod" class="form-control" readonly value="<?php echo $hist['hist_ejeod'];?>"></th>
            </th>
            <th> <input type="number" name="hist_esfoi"class="form-control"  readonly value="<?php echo $hist['hist_esfoi'];?>"></th>
           </th>
             <th>  <input type="number" name="hist_ciloi" class="form-control" readonly value="<?php echo $hist['hist_ciloi'];?>"></th>
            </th>
        </tr>
        </table>
        <table>
        <tr>
            <th><font face="Calibri">Eje OI</font></th>
            <th><font face="Calibri">Diagnostico ojo derecho</font></th>
            <th><font face="Calibri">Diagnostico ojo izquierdo</font></th>
        </tr>
        <tr>
        <th><input type="number" name="hist_ejeoi" class="form-control"  readonly value="<?php echo $hist['hist_ejeoi'];?>"></th>
            </th>
            <th> <input type="text" name="hist_diaod"class="form-control"   readonly value="<?php echo $hist['hist_diaod'];?>"></th>
           </th>
             <th>  <input type="text" name="hist_diaoi" class="form-control"  readonly value="<?php echo $hist['hist_diaoi'];?>"></th>
            </th>
        </tr>
        </table>

            <div class="col-md-4">
                <label class="form-label">Recomendaciones</label>
                <input type="text" name="hist_recom" class="form-control"   readonly value="<?php echo $hist['hist_recom'];?>"></th>
            </div>
           
        </div>
        
        </table>


        <div class="col-md-4 mt-4">
        <a href="<?php echo getUrl("Historia","Historia","Getupdate",array("pac_id"=>$hist['pac_id']))?>"><button class="btn btn-info">Editar</button></a>
<a href="<?php echo getUrl("Paciente","Paciente","consult"); ?>"><button class="btn btn-info">Volver</button></a>
</div>

    </div>

    <?php
        }

    ?>


</div>


