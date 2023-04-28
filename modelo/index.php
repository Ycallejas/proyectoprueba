<?php
require_once('modelo/conexion.php');

class Modelo{
	
	private $conection;
	private $datos;
	
	public function _construct(){
		
	}

	public function getConection() {
		$based= new Conexionbd();
		$this->conection=$based->conection;
	}

	public function mostrar($tabla){
		$this->getConection();
		$consulta="select * from ".$tabla;
		$resultado= $this->conection->query($consulta);
		while ($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
			$this->datos[]=$filas;
		}
		return $this->datos;
	}

	public function insertar($tabla,$data){
		$this->getConection();
		$consulta = "insert into ".$tabla." values('". $data ."')";
		$resultado=$this->conection->query($consulta);
		if($resultado){
			return true;
		}else{
			return false;
		}
	}

	
}