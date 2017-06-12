<?php
	require('suscripcion.php');

	$accion = $_GET['accion'];

	if($accion == "crear"){

		if($_POST){

			$objeto = new suscripcion();
			$res = $objeto->insert($_POST);

			if($res)
				header("Location: index.php");
			else
				header("Location: index.php");
		}else{
			header("Location: index.php");
		}
	}
?>