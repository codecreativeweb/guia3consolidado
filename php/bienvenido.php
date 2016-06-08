<?php
session_start();
if(!isset($_SESSION["idPersona"]) || $_SESSION["idPersona"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='../login.html';</script>";
}

?>
<html>
	<head>
		<title>.: HOME :.</title>
		<link rel="stylesheet" href="../stylesheets/default.css">
	</head>
	<body>
		<header id="mast">
    	<h1>Básculas ACA Máquinaria Alimentos</h1>
    </header>
	<?php include "navbar.php"; ?>
<div>

		<h2>Bienvenido</h2>
</div>
	</body>
</html>