<?php 
		session_start();
		require "../conexion/conexion.php";

		class Sesion{				
			var $conn;
			var $conexion;
			function Sesion(){		
				$this->conexion = new  Conexion();				
				$this->conn=$this->conexion->conectarse();
			}	
			
			function iniciarSesion($usuario, $pass){ //recibimos los datos del controlador, a travez de los paramteros de la funcion
				if($usuario && $pass){ // esta condicion es para saber si las variables tienen datos o no
				$pass2 = md5($pass); //md5 es una funcion de php para encriptar los datos es decir transforma por ejmplo
				//la cadena 12345 en 827ccb0eea8a706c4c34a16891f84e7b esto nos proporciona mayor seguridad
				$sql="select * from  iniciar_sesion where user = '".$usuario."' and pass = '".$pass2."'"; //hacemos la consulta a la BD
				$rs = mysqli_query($this->conn, $sql);// ejecutamos el query
				$result = mysqli_num_rows($rs); //mysqli_num_rows es una funcion de php que nos devuelve el numero de campos dependiendo
				//de la consulta, es decir si traa cero quiere decir que no hay ningun usuario registrado con el user y pass ingresados
				//pero se nos devuelve mayor a cero, si hay datos que conicidan con los ingresados
				if($result>0){
					$_SESSION["sesion_ok"]="sesion_correcta"; //creamos la variable de sesion que se llama sesion_ok y le damos el valor
					//de sesion_correcta
					$_SESSION["sesion_usuario"] = $usuario; //podemos crear una variable de sesion con el nombre ingresado en el campo
					//en caso de que la sesion sea correcta
					 ?>
                     <script>
                     	location.href="../vista/sesionCorrecta.php"; /*  luego redireccionamos al archivo sesionCorrecta.php */
                     </script>
                     <?php
				}else{					
					?>
                     <script>
                     	location.href="../vista/index.php"; /* en caso de no coincidir los datos lo redireccionamos de nuevo al 
						formulario de ingresa*/
                     </script>
                     <?php	
				}
			   }else{
				   ?>
                     <script>
                     	location.href="../vista/index.php";
                     </script>
                     <?php	
				   }
			}
		}
?>