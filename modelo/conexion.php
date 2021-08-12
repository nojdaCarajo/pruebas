<?php 
/**
Modelo encargado de realizar al conexión
*/
class Conexion
{
	
	public function conectar(){
		try {
			$pdo= new PDO('pgsql:host=localhost;port=5432;dbname=crud',"postgres","543217");
		} catch (Exception $e) {
			echo "Error ".$e;
		}
		return $pdo;
	}
}

 ?>