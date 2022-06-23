<?php

    include_once '../model/Historia/HistoriaModel.php';

    class HistoriaController{
        public function getInsert(){

            $obj=new HistoriaModel();

            $pac_id=$_GET['pac_id'];

            $sql="SELECT * FROM paciente WHERE pac_id=$pac_id"; 
           
            $paciente=$obj->consult($sql);

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

        $sql= "INSERT INTO historias VALUES ('$hist_motv', '$hist_esfod', '$hist_cilod', '$hist_ejeod', '$hist_esfoi', '$hist_ciloi', '$hist_ejeoi', '$hist_ejeoi', '$hist_diaod', '$hist_diadoi', '$hist_recom', $pac_id)";
        $ejecutar=$obj->insert($sql);
        
        if ($ejecutar){
            echo redirect(getUrl("Historia","Historia","PostInsert"));
            
        }else{
            echo "Error";
        }
    }
    


}
    

       

       
       
       






       

      




?>