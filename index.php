<?php  
// CONTROLLERS
	include_once "controllers/TemplateController.php";
	include_once "controllers/EnlacesController.php";
	include_once "controllers/IngresoController.php";
// MODELS
	include_once "models/Conexion.php";
	include_once "models/EnlacesModel.php";
	include_once "models/IngresoModel.php";

	$template = new TemplateController();
	$template->includeTemplateController();
?>