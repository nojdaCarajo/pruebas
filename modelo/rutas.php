<?php 
/**
Modelo para el manejo de rutas
*/
class ModelRouters
{
	
	public function routersModel($datosModel){
		if ($datosModel=="prueba"||
			$datosModel=="register"||
			$datosModel=="users"||
			$datosModel=="logOut") 
		{
			$modules="vista/".$datosModel.".php";
		}elseif ($datosModel=="index") {
			$modules="vista/inicio.php";
		}else{
			$modules="vista/error.php";
		}
	require_once $modules;
	}
}
 ?>