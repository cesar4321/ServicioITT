<?php 
//Conexion a la base de datos y tablas a usar 
//clases para verificaciones antes de registro 
include("../Conexion.php");
include("Verificacion.php");
include("DatosUsuario.php");
$funcion = new Verificacion;
$Usuarios = new DatosUsuario;
	//asignacion de valores
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$NCtrl = $_POST['Nctrl'];
$Carrera = $_POST['carrera'];
$pass = $_POST['pass'];
$correo = $_POST['email'];
$confirmacionpass = $_POST['passconfirm'];
$genero = $_POST['genero'];
$Semetre = $_POST['semestre'];


//encriptacion de Contraseña
$passHash = password_hash($pass, PASSWORD_BCRYPT);

	//validacion de correo por expresiones regulares 
$ExCorreo = '/^[a-zA-Z(0-9)?]{4,}((\.)?[a-zA-Z(0-9)?]{3,})?@tectijuana\.edu\.mx$/';
	//validacion de contraseña tiene que ser alfanumerica con minimo un numero una letra mayuscula, un caracter especial de una longitud de 8 como minimo maximo de 15
$ExPass = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/';
	//Expresion de numero de control valido
$ExNctrl = '/^[0-9]{8,}$/';
	//VERIFICACION DE CAMPOS VACIOS 
if ($Nombre == "" || $Nombre == null || $Apellido == "" || $Apellido == null || $NCtrl == "" || $NCtrl == null || $Carrera == "" || $Carrera == null
	|| $pass == "" || $pass == null || $correo == "" || $correo == null || $confirmacionpass == "" || $confirmacionpass == null || $Semetre == "" || $Semetre == null) {
	echo "4";
}
	//verificacion de estructura de correo y existencia en DB
else if (preg_match($ExCorreo, $correo) && $funcion->VerificacionEmail($correo)) {
			//verifiicacion de existencia de numero de control
	if ($funcion->VerificarNctrl($NCtrl) && preg_match($ExNctrl, $NCtrl)) {
		if (preg_match($ExPass, $pass) && $pass == $confirmacionpass) {
						//insercion de datos 
			$DatosAlumno = "INSERT INTO alumno(name,last_name,semestre,CARRERA,nctrl,genero) VALUES('$Nombre','$Apellido','$Semetre','$Carrera','$NCtrl','$genero');";
			$ingreso = mysqli_query($conexion, $DatosAlumno);
						//OBTIENE ID DE ALUMNO PARA INSERTAR DATOS DE USUARIO 
			$id = $Usuarios->Datos($NCtrl, $conexion, $alumno);							
					//	INSERCION A USUARIOS				
			$DatosUsuario = "INSERT INTO $usuario (id_alumno,email,pass,active,tipo) VALUES($id,'$correo','$passHash',0,1);";
					//	EJECUCION DE COMANDOS						
			$insercion = mysqli_query($conexion, $DatosUsuario);
						//CIERRE DE CONEXION
			mysqli_close($conexion);
			echo "0";
		} else {
			echo "1";
		}
	} else {
		echo "2";
	}
} else {
	echo "3";
}

?>
