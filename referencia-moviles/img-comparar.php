<?php

    $valor = $_GET['valor'];
    

    include 'conexion.php';

    if($valor != null){
        //$sql = mysql_query("SELECT lng_idmodelo, str_modelo, str_friendly_url, blb_img_mini FROM tbl_modelos WHERE bol_eliminado=0 AND str_modelo like '%".$valor."%' LIMIT 4");
        $sql = mysql_query("SELECT blb_img_normal, str_modelo FROM tbl_modelos WHERE bol_eliminado = 0 AND lng_idmodelo = $valor");

    while ($campo =  mysql_fetch_array($sql)){

        $a = base64_encode($campo[0]);  // IMG BLOB 
        echo '
        <div class="service-icon" style="margin-top:-50px;">
            <img src="data:image/jpeg;base64,'. $a .'" alt="">
        </div>
        <div class="service-content">
            <div class="row">
                <h4>'. $campo[1] .'</h4>                                           
            </div>
        </div>
        ';        
    
    }  
    

}    
?>