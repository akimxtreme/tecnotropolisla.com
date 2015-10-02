<?php
// Where will you get the forms' results?
define("ORDER_FORM", 'info@tecnotropolisla.com');

$post = (!empty($_POST)) ? true : false;

if($post){
$contacto="Formulario de Contacto";

$name = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$pais = utf8_decode ($_POST['pais']);
$empresa = $_POST['empresa'];
$mensaje = $_POST['message'];
$idioma = $_POST['idioma'];

list($codigo, $nombre_pais) = split('[/]', $pais);
//print_r($_POST);
// ************************ MENSAJE ************************************* //
$message = '<table border="1" bordercolor="#333" bgcolor="#FFF" width="650" align="center" style="font-family:Verdana, Geneva, sans-serif;">';
$message.= '<tr><th colspan="2" style="color:#84BD23">Mensaje de Contacto</th></tr>';

// $name
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >NOMBRE</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $name .'</td>';
$message.='</tr>';

// $email
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >EMAIL</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $email .'</td>';
$message.='</tr>';
    
// $telefono
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >TELEFONO</th>';
$message.='<td style="color:#000;" valign="middle" align="center">+'. $codigo . $telefono .'</td>';
$message.='</tr>';
    
// $pais
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >PAIS</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $nombre_pais .'</td>';
$message.='</tr>';

// $empresa
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >EMPRESA</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $empresa .'</td>';
$message.='</tr>';

// $message
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >MENSAJE</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $mensaje .'</td>';
$message.='</tr>';

$message.='</table>';
// ************************ MENSAJE GENERACION DE ORDEN DE PAGO ************************************* //
/*
$para  = 'usuario1@dominio.com' . ', '; // atención a la coma
$para .= 'otrousuario@otrodominio.com';
*/
// Asunto
$titulo = 'Formulario de Contacto Tecnotropolis LLC';
 

// Cabecera que especifica que es un HMTL
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Cabeceras adicionales
$cabeceras .= 'From: '. $contacto .' <'. $email .'>' . "\r\n";
/*
$cabeceras .= 'Cc: archivotarifas@example.com' . "\r\n";
$cabeceras .= 'Bcc: copiaoculta@example.com' . "\r\n";
*/
 
// enviamos el correo!
mail(ORDER_FORM, $titulo, $message, $cabeceras);
    
// ************************ MENSAJE RESPUESTA AUTOMATICA ************************************* //
// Respuesta Automatica Solicitante!
$message2 = "<p>Recibimos su <b>mensaje</b>, sera revisado y respondido por esta via. Saludos.</p>";
$cabeceras2  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras2 .= 'From: Tecnotropolis <'. ORDER_FORM .'>' . "\r\n";
mail($email, 'Tecnotropolis LLC - Correo Recibido', $message2, $cabeceras2);

/*
$mail = mail(ORDER_FORM, $subject, $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());


*/
    if($idioma =="es"){
        echo '<html><head><meta http-equiv="REFRESH" content="0; url=../es/contacto.php?msn=success"></head></html>';
    }else {
        echo '<html><head><meta http-equiv="REFRESH" content="0; url=../es/contacto-en.php?msn=success"></head></html>';
    }
    

}else{
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=../es/contacto.php"></head></html>';
}

?>