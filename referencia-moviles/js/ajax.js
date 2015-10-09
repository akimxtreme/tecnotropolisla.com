var divname;
var name;
var http = getXmlHttpObject();

function handleHttpResponse() 
{
	/*
	if (http.readyState == 0 )
	{
		results = "Error al Cargar los datos";
		//innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
		document.getElementById(divname).innerHTML = results;
	}

	if (http.readyState == 1 )
	{
		results = "Cargando...";
		//results = '<img src="../imagenes/fetching.gif">';
		//innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
		document.getElementById(divname).innerHTML = results;
	}
	*/

	if (http.readyState == 4)
	{
		results = http.responseText;
		//innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
		document.getElementById(divname).innerHTML = results;



	}
	
}





function handleHttpResponse2() 
{
	
	if (http.readyState == 0 )
	{
		results = "Error al Cargar los datos";
		//innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
		document.getElementById(divname).innerHTML = results;
	}

	if (http.readyState == 1 )
	{
		results = "Cargando...";
		//results = '<img src="../imagenes/fetching.gif">';
		//innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
		document.getElementById(divname).innerHTML = results;
	}


	if (http.readyState == 4)
	{
		results = http.responseText;
		//innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
		document.getElementById(divname).innerHTML = results;

		
		especificacion();
	}
	
}


function handleHttpResponse3() 
{
	
	if (http.readyState == 0 )
	{
		results = "Error al Cargar los datos";
		//innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
		document.getElementById(divname).innerHTML = results;
	}

	if (http.readyState == 1 )
	{
		results = "Cargando...";
		//results = '<img src="../imagenes/fetching.gif">';
		//innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
		document.getElementById(divname).innerHTML = results;
	}


	if (http.readyState == 4)
	{
		results = http.responseText;
		//innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
		document.getElementById(divname).innerHTML = results;
	}
	
}



function nuevoAjax()
{ 
	var xmlhttp=false; 
	try 
	{ 
		// No IE
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP"); 
	}
	catch(e)
	{ 
		try
		{ 
			// IE 
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
		} 
		catch(E) { xmlhttp=false; }
	}
	if (!xmlhttp && typeof XMLHttpRequest!="undefined") { xmlhttp=new XMLHttpRequest(); } 
	return xmlhttp; 
}


function getXmlHttpObject()
{
	var xmlhttp;
	/*@cc_on
	@if (@_jscript_version >= 5)
	try
	{
	xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch (e)
	{
	try
	{
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	catch (e)
	{
	xmlhttp = false;
	}
	}
	@else
	xmlhttp = false;
	@end @*/

if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
{
		try
		{
			xmlhttp = new XMLHttpRequest();
		}
		catch (e)
		{
			xmlhttp = false;
		}
	}
return xmlhttp;
}

function url(valor)
{
	
    var url ='referencia-moviles/busqueda.php';	
    divname="resultados";
    //http.open("GET",url, true);
    http.open("GET", url+"?valor="+valor, true);
    http.onreadystatechange = handleHttpResponse;
    http.send(null);
    
}

function compare(valor,valor2)
{	

	var mostrar = 'resultados-comparar-' + valor2;
	document.getElementById(mostrar).style.display = "";
    var url ='referencia-moviles/busqueda-comparar.php';	
    divname="resultados-comparar-"+ valor2;
    //http.open("GET",url, true);
    //http.open("GET", url+"?valor="+valor, true);
    var params = "valor="+valor+"&valor2="+valor2;
    http.open("GET", url+"?"+params, true);
    http.onreadystatechange = handleHttpResponse;
    http.send(null);
    
    
}

function imgCompare(valor,valor2)
{
	
	var ocultar = 'resultados-comparar-' + valor2;
	var inputVacio = 'movil-'+ valor2;
	document.getElementById(ocultar).style.display = "none";	
	document.getElementById(inputVacio).value = "";
    var url ='referencia-moviles/img-comparar.php';	
    divname="img-comparar-"+valor2;   
	//http.open("GET",url, true);
    http.open("GET", url+"?valor="+valor, true);    
    //http.open("GET", url+"?valor="+valor+"&valor2="+valor2, true);
    http.onreadystatechange = handleHttpResponse2;
    http.send(null);



    
}
function especificacion()
{
	///var valor = document.getElementById('compare1').value;
    var url ='referencia-moviles/especificacion-comparar.php';	
    divname="especificaciones";    
    http.open("GET",url, true);      
    //http.open("GET", url+"?valor="+valor, true);
    //http.open("GET", url+"?valor="+valor+"&valor2="+valor2, true);
    http.onreadystatechange = handleHttpResponse3;
    http.send(null);
   
    
    
}
