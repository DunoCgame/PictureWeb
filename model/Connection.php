<?php
//coneccion de base de datos
include("config/variables.php");
//verificacion login

class MysqliConnect{
	
	public $servername;
	public $username;
	public $password;
	public $db;
		
	var $conn;
	var $resultado;

	function __construct(){
			$this->server=ServerName;
			$this->user=UserName;
			$this->pass=PassWord;
			$this->db=DataBase;
	}
	
	//realizar Conexion
	function Connection(){
				$this->conn = new mysqli($this->server, $this->user, $this->pass, $this->db);	
		
			if($this->conn->connect_error){
				  die("Connection failed: " . $this->conn->connect_error);
				}
				echo "<br><h2>Connected successfully</h2><br>";
	}
	
	//realizar consulta
	function Query($sql){
				$this->resultado = $this->conn->query($sql);
			
	}
	//obtener Resultado
	function Get_result(){
				return $this->resultado;
	}	
	
	//librerar Resultados
	function Free_result(){
				return $this->resultado->free();
	}
	//cerrar Conexion
	function Close_Connection(){
				$this->conn->close();
		
	}
	
}



?>