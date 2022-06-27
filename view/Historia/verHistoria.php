<div class="mt-5">
    <hr>
    
    <h3 class="display-16" style="margin-left:16%"  class="wrapper d-flex">Información  Historia medica </h3>
</div>

<center>
<div class="mt-5">
    <?php
       
        foreach($historias as $hist){
    ?>
    


<div class="container" >
  <div class="row">
    <div class="col col-4">
       <b>No. Clinica </b>  <?php echo $hist['hist_id']?>
    </div>
    <div class="col col-3"> 
    <b> Paciente</b>  <?php echo $hist['pac_nombre'];?>  <?php echo $hist['pac_apellido'];?>
    </div>
    <div class="col col-3">
     <b>Genero </b>  <?php
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

<div class="container">
  <div class="row">
    <div class="col col-4">
       <b> Motivo de visita  </b>
    </div>
    <div class="col col-3"> 
    <b> Esfera OD</b>
    </div>
    <div class="col col-3">
     <b>Cilindro OD </b>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col col-4">
    <?php echo $hist['hist_motv'];?>
    </div>
    <div class="col col-3"> 
    <?php echo $hist['hist_esfod'];?>
    </div>
    <div class="col col-3">
    <?php echo $hist['hist_cilod'];?>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col col-4">
       <b> Eje OD</b>
    </div>
    <div class="col col-3"> 
    <b> Esfera OI</b>
    </div>
    <div class="col col-3">
     <b>Cilindro OI </b>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col col-4">
    <?php echo $hist['hist_ejeod'];?>
    </div>
    <div class="col col-3"> 
    <?php echo $hist['hist_esfoi'];?>
    </div>
    <div class="col col-3">
    <?php echo $hist['hist_ciloi'];?>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col col-4">
    <b> Eje OI </b>
    </div>
    <div class="col col-3"> 
    <b> Diagnostico ojo derecho </b>
    </div>
    <div class="col col-3">
    <b> Diagnostico ojo izquierdo </b>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col col-4">
    <?php echo $hist['hist_ejeoi'];?>
    </div>
    <div class="col col-3"> 
    <?php echo $hist['hist_diaod'];?>
    </div>
    <div class="col col-3">
    <?php echo $hist['hist_diaoi'];?>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col col-4">
     <b> Recomendaciones </b>
    </div>
    <div class="col col-3"> 
   
    </div>
    <div class="col col-3">
      
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col col-4">
    <?php echo $hist['hist_recom'];?>
    </div>
    <div class="col col-3"> 
   
    </div>
    <div class="col col-3">
      
    </div>
  </div>
</div>


       
       
        
  
      



    </div>

    <div class="col-md-4 mt-4">
        <a href="<?php echo getUrl("Historia","Historia","Getupdate",array("hist_id"=>$hist['hist_id']))?>"><button class="btn btn-info">Editar</button></a>
<a href="<?php echo getUrl("Paciente","Paciente","consult"); ?>"><button class="btn btn-info">Volver</button></a> <br><br><br><br><br><br><br><br>
</div>

    <?php
        }

    ?>


</div>


