<?php

    $valor = $_GET['valor'];
    $valor2 = $_GET['valor2'];

    include 'conexion.php';

    if($valor != null){
        //$sql = mysql_query("SELECT lng_idmodelo, str_modelo, str_friendly_url, blb_img_mini FROM tbl_modelos WHERE bol_eliminado=0 AND str_modelo like '%".$valor."%' LIMIT 4");
        $sql = mysql_query("SELECT m.lng_idmodelo, m.str_modelo, m.str_friendly_url, m.blb_img_mini, dm.str_descripcion  FROM tbl_modelos as m JOIN cat_datos_maestros as dm ON m.lng_idtipo_equipo = dm.lng_iddato_maestro WHERE m.bol_eliminado = 0 AND m.str_modelo LIKE '%".$valor."%' LIMIT 3");
echo '<div style="float:left;width:81%;background:#FFF;border:1px solid #666;padding:15px 5px 0px 5px;position:absolute;z-index:10;">';
    echo '<table class="table table-hover">';
    while ($campo =  mysql_fetch_array($sql)){
        $a = base64_encode($campo[3]);  // IMG BLOB 
    //echo '<tr style="cursor:pointer;" onclick="especificacion();">';
    echo '<tr style="cursor:pointer;" onclick="especificacion('.$campo[0].');imgCompare('.$campo[0].','.$valor2.');">';
        echo '<td style="width:100px"><img src="data:image/jpeg;base64,'. $a .'" alt="'. $campo[1] .'" title="'. $campo[0] .'" style="width:60px"></td>';
        echo '<td><p class="text-left">'.$campo[1].'</p></td>';          
    echo '</tr>';
    }  
    echo '</table>';
echo '</div>';

}    
// setTimeout("especificacion()",500);
?>

