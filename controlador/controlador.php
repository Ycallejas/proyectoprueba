<?php
require_once('modelo/index.php');

class controladormodelo{
	private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    //mostrar
    static function presentar(){
    	$usuario = new Modelo();
    	$dato    = $usuario->mostrar("usuario");
    	require_once("vista/index.php");
    }

    static function nuevo(){
        require_once('vista/nuevo.php');
    }

    static function guardar(){
    	$id= $_REQUEST['id_usuario'];
    	$contrasenia= md5($_REQUEST['pass_usuario']);
    	$username= $_REQUEST['name_usuario'];
    	$data= $id."','".$contrasenia."','".$username;
    	$usuario=new Modelo();
    	$dato=$usuario->insertar("usuario",$data);
        header("location:".urlsite);
    }
}

