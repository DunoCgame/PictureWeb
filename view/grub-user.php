<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
<!---	--->
	<link rel="shortcut icon" href="view/asset/image/logo.png" >
	<link rel="stylesheet"    href="view/asset/styles/iconos.css">
	<link rel="stylesheet"    href="view/asset/styles/Normalize.css"> 
	<link rel="stylesheet"    href="view/asset/styles/grub-user.css"> 

	
	<title>Picture</title>
</head>

<body class="body">
	<main class="grub-user">
		<nav class="navbar-grub-user">

			<ul class="menu">
				<button class="btn estilo-1">1</button>
				<button class="btn estilo-2">2</button>
				
				<li class="item"><a class="link">item</a></li>
				<li class="item"><a class="link">item</a></li>
				<li class="item"><a class="link">item</a></li>
			</ul>
		
		</nav> 
		<section class="area-control">
		
	<div class="containner Posts">
				<div class="containner-title">
					<h2 class="title">Post Publish</h2>
				</div>
				
			<div class=" post" >
				<?php
				 include("./controller/Controller_get_Post.php");
					$get_Post = new Extracts_Post_Datas();
					$get_Post->have_Posts();
				
				
				
				?>
			</div>
	</div>
		
		<div class="containner control">
				<div class="containner-title">
					<h2 class="title">News Post</h2>
				</div>
				
	<form class="form-post" action="./controller/Controller_Post.php" method="POST" enctype="multipart/form-data">

				<label class="containner-file">
					<span class="icon-upload"></span>
					<span>Upload Image</span>
					<input name="imagen" type="file" maxlength="150" id="file"  name="file">
				</label>
				

				<div class="data-post">
					<div class="containner-NamePost">
						<label class="Etique">Name Post</label>
						<input type="text" id="name-post" name="Titlepost" placeholder="Name Post">
									
					</div>
					
					<div  class="containner-Category" >
						<label class="Etique">Category</label>
						<input type="text" id="category" name="category" placeholder="Category">
					
					
					</div>
				</div>
				
				<div>
					<label class="Etique descripcion">Descripcion</label>
					<textarea id="text-descriptcion" name="Descripcion" placeholder="Write something.."></textarea>
				
				</div>
			
		
		<input type="submit" class="btn-submit" value="Agregar" name="submit" style="cursor: pointer">
	
	
	</form>
			

		</div>
			
		<div class="containner userdata">			
				<div class="data-user">
					<div class="user"> 
						<img class="icon-user-Article" src="view/asset/image/user.png">
						<span class="name-user">Nombre</span>
					</div>
				</div>
				<div class="Estadis">
					<div>
						<label class="numberImg">Numero Image:</label><span>0</span>
					</div>
					
					<div>
						<label class="icon-heart">:</label><span>0</span>
					</div>
				</div>	
		</div>
		
		
		</section>
			
		
		
	</main>
</body>
<script src="asset/javascript/main.js"></script>
</html>
