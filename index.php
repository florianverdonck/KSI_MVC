<?php
	
	error_reporting(-1);
	ini_set('display_errors', 'On');

	
	define("PATH_CONTROLLERS", "controllers/");
	define("PATH_VIEWS", "views/");
	define("PATH_MODELS", "models/");
	
	define("PATH_ASSETS", PATH_VIEWS . "assets/");
	define("PATH_CSS", PATH_ASSETS . "css/");
	define("PATH_PICS", PATH_ASSETS . "pics/");
	define("PATH_IMAGES", PATH_ASSETS . "images/");
	define("PATH_FONTS", PATH_ASSETS . "fonts/");
	define("PATH_FORM", PATH_ASSETS . "form/");
	define("PATH_JS", PATH_ASSETS . "js/");
	
	
	$page = 'powerbox';
	
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}
	
	switch ($page) {
	
		case 'powerbox':
			require_once(PATH_CONTROLLERS . "PowerboxController.php");
			$controller = new PowerboxController();
			break;
			
		case 'pedalbox':
			require_once(PATH_CONTROLLERS . "PedalController.php");
			$controller = new PedalboxController();
			break;
		
		case 'boitier_additionnel':
			require_once(PATH_CONTROLLERS . "VehicleController.php");
			$controller = new VehicleController();
			break;
			
		case 'vehicleSelect':
			require_once(PATH_CONTROLLERS . "VehicleSelectController.php");
			$controller = new VehicleSelectController();
			break;
			
	}
	
	$controller->run();
	
?>