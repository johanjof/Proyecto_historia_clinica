<?php

    include_once '../model/Historia/HistoriaModel.php';

    class HistoriaController{
        public function getInsert(){

            $obj=new HistoriaModel();

            $pac_id=$_GET['pac_id'];

            $sql="SELECT * FROM paciente WHERE pac_id=$pac_id"; 
           
            $paciente=$obj->consult($sql);
            $sql="SELECT * FROM generos";
            $generos = $obj-> consult($sql);

            $sql="SELECT * FROM estratos";
            $estratos = $obj-> consult($sql);
    



            include_once '../view/Historia/insert.php';

        }

        
       public function postInsert(){
        $obj = new HistoriaModel();

        $hist_motv=$_POST['hist_motv'];
        $hist_esfod=$_POST ['hist_esfod'];
        $hist_cilod=$_POST ['hist_cilod'];
        $hist_ejeod=$_POST['hist_ejeod'];
        $hist_esfoi=$_POST['hist_esfoi'];
        $hist_ciloi=$_POST['hist_ciloi'];
        $hist_ejeoi=$_POST['hist_ejeoi'];
        $hist_diaod=$_POST['hist_diaod'];
        $hist_diadoi=$_POST['hist_diaoi'];
        $hist_recom=$_POST['hist_recom'];
        $pac_id=$_GET['pac_id'];

        $hist_id=$obj ->autoincrement("hist_id","historias");

        $sql= "INSERT INTO historias VALUES ($hist_id,'$hist_motv', '$hist_esfod', '$hist_cilod', '$hist_ejeod', '$hist_esfoi', '$hist_ciloi', '$hist_ejeoi', '$hist_diaod', '$hist_diadoi', '$hist_recom', $pac_id)";
        $ejecutar=$obj->insert($sql);
       
        if ($ejecutar){
            ?>
            <script>
	  alert("Se creó correctamente");
	    
	  </script>
      

           <?php 
            echo redirect(getUrl("Paciente","Paciente","consult"));
            
        }else{
            ?>
            <script>
     alert("No se efectuo el registro");
       
     </script>
     <?php
            echo redirect(getUrl("Paciente","Paciente","consult"));
            
        }
    }

    public function consult(){
        $obj= new HistoriaModel();

        $hist_id=$_GET['hist_id'];
        $sql="SELECT * FROM historias";
        $historias=$obj->consult($sql);
        $sql="SELECT * FROM generos";
        $generos = $obj-> consult($sql);
       

        include_once '../view/paciente/consult.php';
    }

    
    public function verHistoria(){
        
        
        $obj= new HistoriaModel();

        $pac_id=$_GET['pac_id'];
      /*   $sql="SELECT * FROM paciente WHERE pac_id=$pac_id"; 
        $paciente=$obj->consult($sql);  */

       /*  $hist_id=$_GET['hist_id']; */
        $sql= "SELECT * FROM historias AS h, paciente AS p WHERE p.pac_id= h.pac_id AND p.pac_id=$pac_id";
        /* $sql="SELECT * FROM historias WHERE hist_id=$hist_id"; */
        $historias = $obj-> consult($sql); 

        $sql="SELECT * FROM generos";
        $generos = $obj-> consult($sql);
       
      

       

    

        include_once '../view/Historia/verHistoria.php';
    }


    public function getUpdate(){
        $obj=new HistoriaModel();

       
        /* $sql="SELECT * FROM paciente WHERE pac_id=$pac_id"; 
        $paciente=$obj->consult($sql); */

        $hist_id=$_GET['hist_id'];
        $sql= "SELECT * FROM historias AS h, paciente AS p WHERE p.pac_id= h.pac_id AND h.hist_id=$hist_id";
       /*  $sql="SELECT * FROM historias WHERE hist_id=$hist_id"; */
        $historias = $obj-> consult($sql); 

        $sql="SELECT * FROM generos";
        $generos = $obj-> consult($sql);

        $sql="SELECT * FROM estratos";
        $estratos = $obj-> consult($sql);


        include_once "../view/Historia/update.php";
    }

    public function postUpdate(){

        $obj =new HistoriaModel();

        $hist_motv=$_POST['hist_motv'];
        $hist_esfod=$_POST ['hist_esfod'];
        $hist_cilod=$_POST ['hist_cilod'];
        $hist_ejeod=$_POST['hist_ejeod'];
        $hist_esfoi=$_POST['hist_esfoi'];
        $hist_ciloi=$_POST['hist_ciloi'];
        $hist_ejeoi=$_POST['hist_ejeoi'];
        $hist_diaod=$_POST['hist_diaod'];
        $hist_diaoi=$_POST['hist_diaoi'];
        $hist_recom=$_POST['hist_recom'];
        $hist_id=$_GET['hist_id'];


      

        $sql= "UPDATE  historias SET hist_id=$hist_id, hist_motv='$hist_motv', hist_esfod='$hist_esfod', hist_cilod='$hist_cilod',hist_ejeod='$hist_ejeod',hist_esfoi= '$hist_esfoi', hist_ciloi='$hist_ciloi',hist_ejeoi= '$hist_ejeoi',hist_diaod= '$hist_diaod',hist_diaoi= '$hist_diaoi',hist_recom='$hist_recom' WHERE hist_id=$hist_id";
        $ejecutar=$obj->update($sql);
       
        if ($ejecutar){
            ?>
            <script>
     alert("Se editó correctamente");
       
     </script>
     <?php
            echo redirect(getUrl("Paciente","Paciente","consult"));
            
        }else{
            ?>
            <script>
     alert("No se efectuo el registro");
       
     </script>
     <?php
            echo redirect(getUrl("Paciente","Paciente","consult"));
            
        }


            }
        }
    ?>
