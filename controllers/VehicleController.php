<?php
	 
class VehicleController {
	
	public function __construct() {
	
	}
			
	public function run(){			
			
		$descriptionUnderlined = $_GET['description'];
		
		$descriptionClean = str_replace("+", " ", $descriptionUnderlined);
		$descriptionClean = str_replace("_", "/", $descriptionClean);
		
		$db = Db::getInstance();
		$isValid = $db->isValidDescription($descriptionClean);
		
		if ($isValid) {
				
			$vehicle = new VehicleModel($descriptionClean);
			$make = $vehicle->getMake();
			$model = $vehicle->getModel();
			$generation = $vehicle->getGeneration();
			$description = $vehicle->getProductDesc();
			$productID = $vehicle->getProductID();
			$year = $vehicle->getYear();
			$volume = $vehicle->getVolume();
			$motorCode = $vehicle->getMotorCode();
			$tuv = $vehicle->getTuv();
			$kwOri = $vehicle->getKwOri();
			$kwTun = $vehicle->getKwTun();
			$nmOri = $vehicle->getNmOri();
			$nmTun = $vehicle->getNmTun();
			$hpOri = $vehicle->getHpOri();
			$hpTun = $vehicle->getHpTun();
			$powerBoxPrice = $vehicle->getPowerBoxPrice();
			$pedalBoxPrice = $vehicle->getPedalBoxPrice();
			
			$bothPrice = ($powerBoxPrice + $pedalBoxPrice)*0.9;
			
			$cableSet = $vehicle->getCableSet();
			
			$hpDiff = $vehicle->getHpDiff();
			$nmDiff = $vehicle->getNmDiff();
		
			$hpProcentOri = $vehicle->getHpProcentOri() - 8;
			$nmProcentOri = $vehicle->getNmProcentOri() - 8;
			
			
			if ($generation != "") {
				$modelDetailed = $model . " " . $generation;
			} else {
				$modelDetailed = $model;
			}
			
			$make_url = str_replace(" ", "_", $make);
		
			require_once(PATH_VIEWS . 'vehicle.php');
			
		} else {
			
			header("Location: page_introuvable.html");
						
		}
		
	}
	
}
?>