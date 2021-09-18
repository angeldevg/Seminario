<?php

include("conexion.php");

$nombre = $_POST["usuario"];
$pass   = $_POST["pass"];

if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario = '$nombre'  AND pass = '$pass';");
	$nr = mysqli_num_rows($query);
	
	if($nr==1){

		session_start();

		$_SESSION["usuario"] = $_POST["usuario"];
		
		echo header("Location: http://192.168.1.117/TIENDA-ENLINEA-SEMINARIO/View/controlpanel.php");
	}else
	{
		echo header("Location: http://192.168.1.117/TIENDA-ENLINEA-SEMINARIO/View/login.html");
		
	}
}

?>