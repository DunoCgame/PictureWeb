<?php

include("Connection.php");

class Valides_Login{
	
	//Properties
		public $user;
		public $password;
	
	//Methods obtencion de database constructor
		public function __construct($user, $password){
			$this->password = $password;	
			$this->user = $user;
		}
	//login solicitud
function Vericacion(){
			
		if($this->user==NULL){ echo "<p>El campo user esta vacio</p>"; 			}
							
		if($this->password==NULL){ echo "<p>El campo passwrd esta vacio</p>";	}

			if($this->user!=NULL && $this->password!=NULL){
			  if(is_numeric($this->user)){ echo "Tu nombre no puede ser un valor numerico"; }
						else{
							//salida
							return "true";
						echo "valores validos";
						}//cierre if
					}
			}//login metodo

}//cierre clase

class IniciarSeccion extends Valides_Login{
	
  function StartSession(){
			
	if(isset($this->user)  && !empty($this->user)  && isset($this->password)  && !empty($this->password) ){
				if($this->Vericacion()=="true"){
							// echo "Datos Validos -- Session Init<br>";
							
$connect = new MysqliConnect();
$connect->Connection();
// $connect->Query("SELECT * FROM `user");
$connect->Query("SELECT `UserName`,`Email`, `PassWord` FROM `user` WHERE `UserName`='$this->user' OR `Email`='$this->user' AND `PassWord`='$this->password'");						
$result = $connect->Get_result();

// print_r($result->num_rows);
// print_r($result->fetch_assoc());
// num_rows() comprueba si hay más de cero filas devueltas
// fetch_assoc()coloca todos los resultados en una matriz asociativa

$data=$result->fetch_assoc();

// echo "<br>".$data['UserName'];

	if($this->user == $data['UserName'] &&  $this->password == $data['PassWord'] || 
	   $this->user == $data['Email']    &&  $this->password == $data['PassWord']){
			
		session_start();
		
			 $_SESSION['username'] = $data['UserName'];	
				echo "<h2><center>inico Session</center></h2>";
		}
		else{
			echo"<h2><center>Hubo un error o No esta registrado</center></h2>";
			}


		$connect->Free_result();
		$connect->Close_Connection();


					}//cierre de verificacion data
			}//cierre if
			
		}//cierre metodo
	
}//cierre Clase


if(isset($_POST['submit'])){
	$user=$_POST['user-name'];
	$pass=$_POST['Password-login'];

	$LoginStatus = new IniciarSeccion($user,$pass);

	$LoginStatus->StartSession();
	

}





?>