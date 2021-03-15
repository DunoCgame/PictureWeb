<?php 




class CreatePost{


	public $NameUser;
	
	public $TitlePost;
	public $CategoryPost;
	public $DescriptcionPost;
	
	public $ImageName;
	public $ImageRuta;

	
	public function __construct($NameUser, $TitlePost, $CategoryPost, $DescriptcionPost, $ImageName, $ImageRuta){
		$this->NameUser = $NameUser; 
		
		$this->TitlePost = $TitlePost; 
		$this->CategoryPost = $CategoryPost; 
		$this->DescriptcionPost = $DescriptcionPost; 
		
		$this->ImageName = $ImageName; 
		$this->ImageRuta = $ImageRuta; 			
	}
	
	
	function Save_Bew_Post_Data(){
			include("../model/Connection.php");
			$connect = new MysqliConnect();
			$connect->Connection();
			
			$connect->Query("INSERT INTO `post`(`User`, `Title`, `Category`, `Descriptcion`, `NameImg`, `Url`)VALUES
				(
				'$this->NameUser',
				'$this->TitlePost',
				'$this->CategoryPost',
				'$this->DescriptcionPost',
				'$this->ImageName',
				'$this->ImageRuta'
				)"
			);

			$result = $connect->Get_result();
			
					if($result==TRUE){
						echo "datos ingresado";
					}
					else{
						echo "ERRROR";
					}

	}// cierre del metodo Save_Bew_Post_Data
		
}//cierre de la clase CreatePost



if(isset($_POST['submit'])){
		
		
		$NameUser="Admins";
		
		$TitlePost=$_POST['Titlepost'];
		$CategoryPost=$_POST['category'];	
		$DescripcionPost=$_POST['Descripcion'];

		/*imagen*/
		$name_of_image = $_FILES['imagen']['name'];
		$name_tmp_image = $_FILES['imagen']['tmp_name'];
		$type_of_image = $_FILES['imagen']['type'];
		$size_of_image = $_FILES['imagen']['size'] ."<br>";
		$path_of_image = "../view/uploads/";
		$target_path_of_image = $path_of_image . basename( $_FILES['imagen']['name']);
		
		
		//compruebo si las características del archivo son las que deseo
			if (!((strpos($type_of_image, "png") || strpos($type_of_image, "gif") || strpos($type_of_image, "jpeg")) && ($size_of_image < 900000))) {
				echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
			}else{
				// subir al servidor.
				if (move_uploaded_file($_FILES['imagen']['tmp_name'],  $target_path_of_image)){
						echo "El archivo ha sido cargado correctamente.";
				}
				else{
						echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
				}
			}
		
$NewPost = new CreatePost($NameUser, $TitlePost, $CategoryPost, $DescripcionPost, $name_of_image, $path_of_image);
 
$NewPost->Save_Bew_Post_Data();
		
}




?>