<?php

include("../model/Connection.php");


class Valides_Registro{
	
		public $UserName;
		public $FristName;
		public $LastName;
		public $Email;
		public $PassWord;
		public $RePassWord;
	
		public function __construct($UserName,$FristName,$LastName,$Email,$PassWord,$RePassWord){
			$this->UserName =  $UserName; 
			$this->FristName = $FristName; 
			$this->LastName =  $LastName;
			$this->Email =  $Email;
			$this->PassWord =  $PassWord;	
			$this->RePassWord =  $RePassWord;	
		}
		
		function Valides_de_Form(){
			if($this->FristName==Null){echo "FristName esta vacido";}
			if($this->LastName==Null){echo "LastName esta vacido";}
			if($this->UserName==Null){echo "UserName esta vacido";}
			if($this->Email==Null){echo "Email esta vacido";}
			if($this->PassWord==Null){echo "PassWord esta vacido";}
			if($this->RePassWord!=$this->RePassWord){echo "The PassWord not identic";}
			
			
if($this->FristName!=NULL && $this->LastName!=NULL && $this->UserName!=NULL && 
	$this->Email!=NULL  && $this->PassWord!=NULL && $this->RePassWord==$this->PassWord){
						
						echo "datos validos pasando a valides";

$connect = new MysqliConnect();
$connect->Connection();
// $connect->Query("SELECT * FROM `user");
$connect->Query("SELECT `UserName`,`Email`, `PassWord` FROM `user` WHERE `UserName`='$this->UserName' OR `Email`='$this->Email' AND `PassWord`='$this->PassWord'");						
$result = $connect->Get_result();		
						
		$data=$result->fetch_assoc();
		
	 if($this->user != $data['UserName']     && 	   
		$this->password != $data['PassWord'] 	&&
		$this->user != $data['Email']){

			return "true";
			
	   }   else{
				echo "<h2>Usuario ya Registrado</h2>"
		   }
		   
				} else{ echo "Datos invalidos"; }

			}
	
	
}

class Registrar_user extends Valides_Registro{
	
function Save_new_user(){
	
if(	isset($this->FristName)   && !empty($this->FristName) && 
	isset($this->LastName)    && !empty($this->LastName)  &&	
	isset($this->UserName)    && !empty($this->UserName)  &&
	isset($this->Email)       && !empty($this->Email)     &&	
	isset($this->PassWord)    && !empty($this->PassWord)  &&
	isset($this->RePassWord)  && !empty($this->RePassWord)){
				
				echo "datos validos";
				
$connect = new MysqliConnect();
$connect->Connection();
 
$connect->Query("INSERT INTO `user`(`UserName`, `FristName`, `SeconName`, `Email`, `PassWord`) VALUES ('$this->UserName','$this->FristName' ,'$this->LastName', '$this->Email','$this->PassWord')");
						
$result = $connect->Get_result();

echo $result ."<br>";

		if($result==TRUE){
			echo "datos ingresado";
		}else{
			echo "ERRROR";
		}


mysql_free_result($result); // Liberar resultados
		mysql_close($conn); // Cerrar Conexion
			
		
	}
	
}
}//cierre clase


if(isset($_POST['submit'])){
		
		$fristname=$_POST['first-name'];
		$lastname=$_POST['Last-name'];
		$user=$_POST['user-name'];
		$email=$_POST['Email'];
		$pass=$_POST['Password'];
		$Rpass=$_POST['Re-Password'];
		
		echo $fristname .$lastname .$user .$email .$pass .$Rpass ."<br>";
 $Register = new Registrar_user($fristname,$lastname,$user,$email,$pass,$Rpass);
 $Register->Save_new_user();









		
}

?>