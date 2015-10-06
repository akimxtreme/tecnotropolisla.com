<?php

    $valor = $_GET['valor'];

    include 'conexion.php';

    if($valor != null){
        //$sql = mysql_query("SELECT lng_idmodelo, str_modelo, str_friendly_url, blb_img_mini FROM tbl_modelos WHERE bol_eliminado=0 AND str_modelo like '%".$valor."%' LIMIT 4");
        $sql = mysql_query("SELECT m.lng_idmodelo, m.str_modelo, m.str_friendly_url, m.blb_img_mini, dm.str_descripcion  FROM tbl_modelos as m JOIN cat_datos_maestros as dm ON m.lng_idtipo_equipo = dm.lng_iddato_maestro WHERE m.bol_eliminado = 0 AND m.str_modelo LIKE '%".$valor."%' LIMIT 4");

echo '<div style="float:left;width:93.5%;background:#FFF;border:1px solid #666;padding:15px 5px 0px 5px;position:absolute;z-index:10;">';
    echo '<table class="table table-hover">';
    while ($campo =  mysql_fetch_array($sql)){
        $a = base64_encode($campo[3]);  // IMG BLOB 
    echo '<tr>';
        echo '<td style="width:100px"><img src="data:image/jpeg;base64,'. $a .'" alt="'. $campo[1] .'" style="width:100px"></td>';
        echo '<td>';
            echo '<p class="text-left"><b>'.$campo[1].'</b></p>';
            echo '<p class="text-left"><small>'.$campo[4].'</small></p>';
            echo '<form method="post" action="blu-compare">';
                echo '<input type="hidden" name="movil" value="'. $campo[2] .'">';
                echo '<div class="btn-group" role="group" aria-label="...">';
                    echo '<a href="blu-phone/'. $campo[2] .'" class="btn btn-system">Detalles</a>';                        
                    echo '<button type="submit" class="btn btn-system btn-black">Comparar</button>';
                echo '</div>';
            echo '</form>';            
        echo '</td>';
    echo '</tr>';
    }
  
    echo '<tr>';
        echo '<td colspan="2"><p class="text-right"><a href="es/moviles" class="btn btn-system btn-mini border-btn">Ver Todos <i class="fa fa-arrow-circle-right"></i></a></p></td>';
    echo '</tr>';
    echo '</table>';
echo '</div>';

}    
?>