<?php

require_once('conexion.php');

// ************************************************************************************************** //
// Consulta las Marcas de los Moviles
// ************************************************************************************************** //

function menuMovil() {
    /*
    <div class="widget widget-categories">
        <h4>Productos BLU Series<span class="head-line"></span></h4>
        <ul>
            <li><a href="#"><i class="fa fa-tablet"></i> BLU Series</a></li>
        </ul>
    </div>
    */
	$sql = mysql_query("SELECT str_descripcion, str_caracteristica FROM cat_datos_maestros WHERE str_tipo = 'Tipo de Equipo' AND bol_eliminado = 0 ORDER BY str_descripcion");
    echo '<div class="widget widget-categories">';
        echo '<h4>Productos BLU Series<span class="head-line"></span></h4>';
        echo '<ul>';
            while ($campo =  mysql_fetch_array($sql)){
                echo '<li><a href="blue-series/'. $campo[1] .'"><i class="fa fa-tablet"></i> '. $campo[0] .'</a></li>';
            }
        echo '</ul>';
    echo '</div>';
}
// ************************************************************************************************** //
// Muestra las Categorias de los Moviles con su respectiva imagen
// ************************************************************************************************** //
function imgCatMovil() {
	$sql = mysql_query("SELECT str_url_friendly FROM cat_marcas ORDER BY str_marca ASC");
echo '<div class="col-lg-7 col-xs-12" >';
    echo '<h2 class="col-lg-12"><a href="#">Moviles</a></h2>';
echo '</div>';
echo '<!-- ./col-lg-7 col-xs-12 -->';

echo '<div class="col-lg-7 col-xs-12" > ';
while ($f=  mysql_fetch_array($sql)){
	echo '<div class="col-xs-6 col-md-3">';
    	echo '<a href="moviles.php?all='. $f[0] .'" class="thumbnail"><img src="images/logo/logo-'. $f[0] .'.jpg" alt=""></a>';
    echo '</div>';
}
echo '</div>';
echo '<!-- ./col-lg-7 col-xs-12 -->';
}
// ************************************************************************************************** //
// Buscador de Moviles
// ************************************************************************************************** //
function buscadorMovil(){
echo '<script type="text/javascript" src="referencia-moviles/js/ajax.js"></script>';

echo '<form action="http://192.168.1.109/corporacion/tecnotropolisla.com/es/moviles" method="POST" onsubmit="return onSubmit();">';                        
    echo '<div class="input-group">';
        echo '<span class="input-group-addon" style="background:#111;color:#FFF;"><i class="fa fa-tablet"></i> BLU</span>';
        echo '<input name="movil" id="movil" type="text" autocomplete="off" class="form-control" onkeyup="url(this.value)" placeholder="Buscar Teléfonos BLU...">';
        echo '<span class="input-group-btn">';
        echo '<button class="btn btn-default" type="submit" style="background:#ED163F;color:#FFF;" onclick="search()"><i class="fa fa-search"></i></button>';
        echo '</span>';
    echo '</div><!-- /input-group -->';
echo '</form>';


echo '<script>
    function onSubmit(){                                
    var movil = document.getElementById("movil").value;
        if( (movil=="") || (movil==false) ){
            return false;
        }
    }
</script>';
echo '<span id="resultados" position:absolute;z-index:10;">';
//echo '<div id="resultados" style="float:left;width:93.5%;background:#FFF;border:1px solid #666;padding:15px 5px 0px 5px;position:absolute;z-index:10;">';
/*
    <table class="table table-hover">
    <tr>
    <td style="width:100px"><img src="images/moviles/blue-phone-150x200.jpg" style="width:100px"  alt=""></td>
    <td>
        <p class="text-left"><b>BLU Energy X</b></p>
        <p class="text-left"><small>Dash Series</small></p>
        <div class="btn-group" role="group" aria-label="..." style="margin-top:40px;">
            <a href="es/phones/blu-energy-x" class="btn btn-system btn-mini">Detalles</a>
            <a href="es/phones/blu-energy-x" class="btn btn-system btn-black btn-mini">Comparar</a>                         
        </div>
    </td>                                   
    </tr>
                               
    <tr>
        <td colspan="2"><p class="text-right"><a href="#" class="btn btn-system btn-mini border-btn">Ver Todos <i class="fa fa-arrow-circle-right"></i></a></p></td>
    </tr>
    </table>  
*/  
                                                
//echo '</div>';
echo '</span>';
/*
echo'
	<div class="col-lg-12">
    	<br>
        <form role="form">
        	<div class="col-lg-4 col-lg-push-8  col-xs-push-0">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i> Movil</span>
                        <input class="form-control" id="campo" name="campo" type="text" onkeyup="url(this.value)"  autocomplete="off">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>  
                <!-- ./input-group -->                     
            </div>
            <!-- ./col-lg-4 -->                        
        </form>
        <!-- form -->                
    </div>
    <!-- ./col-lg-12 -->
    
    <div class="col-lg-12">
    <!-- Resultados de Busqueda de Moviles -->
    	<div id="resultados"></div>
    </div>
    <!-- ./col-lg-12 -->';
    */
}
// ************************************************************************************************** //
// Consulta Todos los Moviles de una Marca
// ************************************************************************************************** //
function allMovil(){
    /*
    <div class="col-md-4 service-box service-center">
        <div class="service-boxed" style="border:1px solid #ccc;">
            <div class="service-icon" style="margin-top:-50px;">
                <img src="images/moviles/blue-phone-450x500.jpg" alt="">
            </div>
            <div class="service-content">
                <div class="row">
                    <h4>BLU Energy X</h4>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="es/phones/blu-energy-x" class="btn btn-system">Detalles</a>
                        <a href="es/phones/blu-energy-x" class="btn btn-system btn-black">Comparar</a>                          
                    </div>
                </div>
            </div>
        </div>
    </div>                            
    */
    $sql = mysql_query("SELECT str_modelo, blb_img_normal, str_friendly_url FROM tbl_modelos WHERE bol_eliminado = 0 ORDER BY lng_idmodelo DESC");
    
    while ($campo =  mysql_fetch_array($sql)){
        $a = base64_encode($campo[1]);  // IMG BLOB 
    echo '<div class="col-md-4 service-box service-center">';
        echo '<div class="service-boxed" style="border:1px solid #ccc;">';
            echo '<div class="service-icon" style="margin-top:-50px;">';
                echo '<img src="data:image/jpeg;base64,'. $a .'" alt="'. $campo[0] .'">';
            echo '</div>';
            echo '<div class="service-content">';
                echo '<div class="row">';
                    echo '<h4>'. $campo[0] .'</h4>';
                    echo '<form method="post" action="blu-compare">';
                        echo '<input type="hidden" name="movil" value="'. $campo[2] .'">';
                        echo '<div class="btn-group" role="group" aria-label="...">';
                            echo '<a href="blu-phone/'. $campo[2] .'" class="btn btn-system">Detalles</a>';                        
                            echo '<button type="submit" class="btn btn-system btn-black">Comparar</button>';
                        echo '</div>';
                    echo '</form>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    }
}

// ************************************************************************************************** //
// Consulta Todos los Moviles a partir de una variable
// ************************************************************************************************** //
function searchMovil($valor){    
    $sql = mysql_query("SELECT str_modelo, blb_img_normal, str_friendly_url FROM tbl_modelos WHERE bol_eliminado = 0 AND str_modelo like '%".$valor."%' LIMIT 15");
    //$sql = mysql_query("SELECT lng_idmodelo, str_modelo, str_friendly_url, blb_img_normal FROM tbl_modelos WHERE bol_eliminado=0 AND str_modelo like '%".$valor."%' LIMIT 4");
    while ($campo =  mysql_fetch_array($sql)){
        $a = base64_encode($campo[1]);  // IMG BLOB 
    echo '<div class="col-md-4 service-box service-center">';
        echo '<div class="service-boxed" style="border:1px solid #ccc;">';
            echo '<div class="service-icon" style="margin-top:-50px;">';
                echo '<img src="data:image/jpeg;base64,'. $a .'" alt="'. $campo[0] .'">';
            echo '</div>';
            echo '<div class="service-content">';
                echo '<div class="row">';
                    echo '<h4>'. $campo[0] .'</h4>';
                    echo '<form method="post" action="blu-compare">';
                        echo '<input type="hidden" name="movil" value="'. $campo[2] .'">';
                        echo '<div class="btn-group" role="group" aria-label="...">';
                            echo '<a href="blu-phone/'. $campo[2] .'" class="btn btn-system">Detalles</a>';                        
                            echo '<button type="submit" class="btn btn-system btn-black">Comparar</button>';
                        echo '</div>';
                    echo '</form>';                    
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    }
}

// ************************************************************************************************** //
// Consulta un Movil a Partir de una URL Amigable
// ************************************************************************************************** //
function searchMovilURL($valor){   
    
    //
    //$sql = mysql_query("SELECT lng_idmodelo, str_modelo, str_friendly_url, blb_img_normal FROM tbl_modelos WHERE bol_eliminado=0 AND str_modelo like '%".$valor."%' LIMIT 4");
    
    $sql = mysql_query(
                "SELECT 
                               
                movil.str_modelo,
                
                movil.blb_img_normal,
                movil.blb_img_galeria1,
                movil.blb_img_galeria2,
                movil.blb_img_galeria3,
               
                dm.str_descripcion as serie_equipo,
                movil.lng_idmodelo as id_movil
                FROM 
                tbl_modelos as movil 
                JOIN 
                cat_datos_maestros as dm
                ON 
                movil.lng_idtipo_equipo = dm.lng_iddato_maestro 
                WHERE movil.bol_eliminado = 0 
                AND 
                movil.str_friendly_url = '".$valor."'");
    $datos = [];
    while ($campo =  mysql_fetch_array($sql)){
        $a = base64_encode($campo[1]);  // IMG BLOB 
                    //echo '<h4>'. $campo['serie_equipo'] .'</h4><br><hr>';
                    //echo '<img src="data:image/jpeg;base64,'. $a .'" title="'. $campo[0] .'">';
    echo'<div class="row">
        <div class="col-md-5">
            <div class="service-box service-center">
                <div class="service-boxed" style="border:1px solid #ccc;">
                    <div class="service-icon" style="margin-top:-50px;">
                    <img src="data:image/jpeg;base64,'. $a .'" title="'. $campo[0] .'" alt="'. $campo[0] .'" title="'. $campo[0] .'">
                    </div>                                      
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <h3 class="classic-title"><span>'. $campo[0] .' - <i>('. $campo['serie_equipo'] .')</i></span></h3>';
        $datos[] = $campo;
    }   
    /* ##################################################################### */
    $id = $datos[0]['id_movil'];
    /* ##################################################################### */
    /* Query que Consulta las Especificaciones Básicas */
    $queryEspecificacionesBasicas = mysql_query(
                "SELECT                                
                esp.str_valor,              
                title.str_especificacion  
                FROM 
                tbl_modelos_especificaciones as esp 
                JOIN 
                cat_especificaciones as title
                ON 
                esp.lng_idespecificacion = title.lng_idespecificacion 
                WHERE 
                title.str_caracteristica = 1
                AND 
                esp.lng_idmodelo = '".$id."'");
    /* ##################################################################### */
    /* Query que Consulta la Todas las Especificaciones */
    /* ##################################################################### */
    $queryAllEspecificaciones = mysql_query(
                "SELECT                                
                esp.str_valor,              
                title.str_especificacion  
                FROM 
                tbl_modelos_especificaciones as esp 
                JOIN 
                cat_especificaciones as title
                ON 
                esp.lng_idespecificacion = title.lng_idespecificacion 
                WHERE 
                esp.lng_idmodelo = '".$id."'
                ORDER BY 
                title.lng_idespecificacion 
                ");
    /* ##################################################################### */
            echo'<table class="table table-bordered">';
                while ($esp =  mysql_fetch_array($queryEspecificacionesBasicas)){
                    echo'<tr><th class="text-right">'. $esp['str_especificacion'] .'</th><td>'. $esp['str_valor'] .'</td></tr>';
                }
            echo '</table>';
        echo'</div>';
    echo'</div>';

    echo'
    <div class="row">
        <div class="tabs-section">
            <!-- Nav Tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-edit"></i>Especificaciones</a></li>
                    <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-image"></i>Imágenes</a></li>
                    <li><a href="blu-compare/'. $valor .'" ><i class="fa fa-retweet"></i>Comparar</a></li>
                </ul>
            <!-- Tab panels -->
            <div class="tab-content">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active" id="tab-1">
                    <table class="table table-bordered table-striped">
        ';
                        while ($all =  mysql_fetch_array($queryAllEspecificaciones)){
                            echo'<tr><th class="text-right">'. $all['str_especificacion'] .'</th><td>'. $all['str_valor'] .'</td></tr>';
                        }
    echo '
                    </table>
                </div>
                <!-- Tab Content 2 -->
                <div class="tab-pane fade" id="tab-2">
                    <div class="recent-projects">                   
                        <div class="projects-carousel touch-carousel">    
    ';
                        $img1 = base64_encode($datos[0]['blb_img_galeria1']);  // IMG BLOB GALERIA 1
                        $img2 = base64_encode($datos[0]['blb_img_galeria2']);  // IMG BLOB GALERIA 2
                        $img3 = base64_encode($datos[0]['blb_img_galeria3']);  // IMG BLOB GALERIA 3
                        
                    
    echo '                  
                            <!-- 1 -->  
                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a href="data:image/jpeg;base64,'. $img1 .'" target="_blank">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                                <img src="data:image/jpeg;base64,'. $img1 .'">
                                        </a>
                                    </div>                              
                                </div>
                            </div>
                            <!-- 2 -->  
                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a href="data:image/jpeg;base64,'. $img2 .'" target="_blank">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                                <img src="data:image/jpeg;base64,'. $img2 .'">
                                        </a>
                                    </div>                              
                                </div>
                            </div>
                            <!-- 3 -->  
                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a href="data:image/jpeg;base64,'. $img3 .'" target="_blank">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                                <img src="data:image/jpeg;base64,'. $img3 .'">
                                        </a>
                                    </div>                              
                                </div>
                            </div>       
                        </div>
                    </div>
                    <!-- End Recent Projects Carousel -->
                </div>
                <!-- Tab Content 3 -->
                <div class="tab-pane fade" id="tab-3">
                    <p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rational encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure.</p>
                </div>
            </div>
            <!-- End Tab Panels -->
        </div>
    </div>
    ';
}
?>
