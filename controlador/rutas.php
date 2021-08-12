<?php 
/**
Clase que contiene la función constructora
*/
class RoutersController
{
	


	public function routersCtrl(){
		if (isset($_GET['action'])) {
			$datos=$_GET['action'];
		}else{
			$datos='index';
		}
		$respuesta=ModelRouters::routersModel($datos);
	}
	
}
 ?>