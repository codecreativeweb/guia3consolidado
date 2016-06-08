<?php

if(!empty($_POST)){
	if(isset($_POST["idPersona"]) &&isset($_POST["contrasena"])){
		if($_POST["idPersona"]!=""&&$_POST["contrasena"]!=""){
			include "conexion.php";
			
			$idPersona=null;
			$sql1= "select * from persona where (IdPersona=\"$_POST[idPersona]\") and Contrasena=\"$_POST[contrasena]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$idPersona=$r["IdPersona"];
				break;
			}
			if($idPersona==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.html';</script>";
			}else{
				session_start();
				$_SESSION["idPersona"]=$idPersona;
				print "<script>window.location='bienvenido.php';</script>";				
			}
		}
	}
}



?>