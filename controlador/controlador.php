
<?php 				
			require("../modelo/iniciarSesion.php");
			$objIniciarSesion = new Sesion(); //creamos un objeto de la clase Sesion del archivo iniciarSesion.php
			
			//recibimos los datos de los campos que ingreso, los capturamos por medio de post y se los pasamos a la funcion
			//iniciar_sesion de la clase Sesion del archivo iniciarSesion.php
			//
			if(isset($_POST["nombre_usuario"]) && isset($_POST["contrasena"])){
					$objIniciarSesion->iniciarSesion($_POST["nombre_usuario"],$_POST["contrasena"]);				
			}
									
?>
	