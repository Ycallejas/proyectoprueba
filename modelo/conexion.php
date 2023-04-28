<?php 
require_once 'config.php';

	class Conexionbd {

	private $host;
	private $db;
	private $user;
	private $pass;
	public $conection;

	public function __construct() {		
		$this->host = constant('host');
		$this->db = constant('bd');
		$this->user = constant('user');
		$this->pass = constant('password');

		try {
           $this->conection = new PDO('mysql:host='.$this->host.'; dbname='.$this->db, $this->user, $this->pass);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
	}

}
?>