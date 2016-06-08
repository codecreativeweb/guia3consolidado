<?php

if(!empty($_POST)){
	if(isset($_POST["idPersona"]) &&isset($_POST["nombre"]) &&isset($_POST["apellido"])  &&isset($_POST["idCiudad"]) &&isset($_POST["idTipoPersona"]) &&isset($_POST["descripcion"]) &&isset($_POST["correo"])  &&isset($_POST["idTipoTelefono"]) &&isset($_POST["telefono"]) &&isset($_POST["idTipoDireccion"]) &&isset($_POST["detalle"]) &&isset($_POST["detalle2"]) &&isset($_POST["contrasena"])){
		if($_POST["idPersona"]!=""&& $_POST["nombre"]!=""&& $_POST["apellido"]!=""&&$_POST["correo"]!=""&&$_POST["contrasena"]!=""){
			include "conexion.php";
			
			$found=false;
			$sql= "select * from correo where IdPersona=\"$_POST[idPersona]\" or DescripcionCorreo=\"$_POST[correo]\"";
			$query = $con->query($sql);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				echo "Id de usuario o correo ya estan registrados.";
			}else{
				$sql= "INSERT INTO persona VALUES(\"$_POST[idPersona]\",\"$_POST[nombre]\",\"$_POST[apellido]\",\"$_POST[idTipoPersona]\",\"$_POST[descripcion]\",\"$_POST[contrasena]\")";
				$query = $con->query($sql);
				$sql= "INSERT INTO correo VALUES(\"$_POST[idPersona]\",\"$_POST[correo]\")";
				$query = $con->query($sql);
				$sql= "INSERT INTO direccion VALUES(\"$_POST[idPersona]\",\"$_POST[detalle]\",\"$_POST[detalle2]\",\"$_POST[idCiudad]\",\"$_POST[idTipoDireccion]\")";
				$query = $con->query($sql);
				$sql= "INSERT INTO libretadirecciones VALUES(\"$_POST[telefono]\",\"$_POST[idPersona]\",\"$_POST[detalle]\",\"$_POST[idTipoTelefono]\")";
				$query = $con->query($sql);

				echo "Registro Exitoso";
			}
			
		}
	}else{
		echo "Datos Incompletos";
	}
}



?>