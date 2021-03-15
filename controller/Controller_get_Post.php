<?php
/************************Consulting data Post***********************/

	function Call_consulting(){
			include("./model/Connection.php");	
			$connect = new MysqliConnect();			
			$connect->Connection();
			$connect->Query( "SELECT  `Title` FROM `post` WHERE 1");
			$result = $connect->Get_result();
			return $result;
		
	}



/************************Consulting data Post***********************/
/************************Extract data Post***********************/
class Extracts_Post_Datas{
	
	function have_Posts(){
		
		
		Call_consulting();
				
			

	}
	
	
	function PostTitle(){
			
			// $connect->Connection();
			// $connect->Query( "SELECT  `Title` FROM `post` WHERE 1");
			// $result = $connect->Get_result();
			// $data=$result->fetch_assoc();
			
			// echo $data['Title'];

	}	
	
	function PostDescriptcion(){
		
	}
	
	function PostCategory(){
		
	}	
	
	
	function PostImagen(){
		
	}
	
}


/************************Extract data Post***********************/

?>