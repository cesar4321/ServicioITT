<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "ingles";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD 
//Valores del servidor
	// $host = "localhost";    // sera el valor de nuestra BD 
	// $basededatos = "id5445121_ingles";    // sera el valor de nuestra BD 
	// $usuariodb = "id5445121_trydemo";    // sera el valor de nuestra BD 
	// $clavedb = "IttDemo2018";    // sera el valor de nuestra BD 


	//Lista de Tablas
	$alumno = "alumno";//tabla de datos del alumno 	   
	$usuario="usuario";//tabla de usuarios regristrados 
	$Fechas="fechas_examen"; //tabla de fechas 
	$RegistroExamen = "r_examen"; //Registro de Fecha de examen
	
	//cadena de conexion
	$conexion = mysqli_connect($host,$usuariodb,$clavedb,$basededatos);

	//condicion en caso de error en conexion 
	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>