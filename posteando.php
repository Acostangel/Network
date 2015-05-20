	
	<?php 
	include_once('../incs/_login_check.php');
				$nombre = $_SESSION['user_id'];
					if ((isset($_POST['texto'])) && (isset($_SESSION['user_id']))){//si se envio algo por el campo texto.
						$texto = utf8_decode($_POST['texto']); //almacena lo que se envio por el campo en la variable $texto.
						echo $texto;
							//imprime en pantalla los que se envio por el campo texto.
						$insert = "INSERT INTO  posts (user_id, `date`, posts_content) VALUES ('$nombre',now(),'$texto')";
					 $result = mysqli_query($conx, $insert);
					}
		header('Location: index.php');				
	mysqli_close($conx);
	 ?>
