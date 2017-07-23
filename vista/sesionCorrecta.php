
<?php 
session_start();
if(!isset($_SESSION["sesion_ok"])){ //muchas veces el usuario puede copiar y pegar la url de la pagina
//para entrar a la aplicacion, pero con esta condicion le decimos que la variable de sesion no existe por lo tanto no puede
//ver el contenido de esta pagina y obiamente lo redireccionamos al formulario de acceso que esta en el archivo index.php
	?>
		<script>
        	alert("Debe iniciar sesion");
			location.href="index.php";
        </script>
	<?php 
	}
	
if(isset($_POST["cerrarSession"])){ //cuando presiona el boton cerrsr sesion
	unset($_SESSION["sesion_ok"]); //la funcion unset, lo que hace es destruir o eliminar variables en este caso nosotros
	//eliminados la variable para que no exista hasta que vuelva a iniciar sesion y se cree de nuevo
	?>
	<script>    
			location.href="index.php";
        </script>
    <?php
}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sesion correcta</title>
</head>
<body>
	<form method="post">
    <center>
    <font color="#FF0000" size="+3" face="Lucida Sans Unicode, Lucida Grande, sans-serif"><b><i>Sesiones en PHP</i></b></font>	    
    <br />
    <font size="+2" color="#006600" face="Palatino Linotype, Book Antiqua, Palatino, serif">Autor: Wilson Andres Majin</font>
    <br /><br />   
            Sesion iniciada correctamente <?php echo $_SESSION["sesion_usuario"]; ?>            
            <br /><br />
            <input type="submit" name="cerrarSession" value="Cerrar Sesion" />
            <div align="center">Para mas tutoriales visita: 
    	<a href="<?php echo "http://".$_SERVER['SERVER_NAME']; ?>" target="_blank"><?php echo $_SERVER['SERVER_NAME']; ?></a> y suscribete para recibir a tu email los ultimos tutoriales y ejemplos.<br /><br />
        Nota: Si no te sube archivos, lee el archivo de texto "Leeme Importante", que viene en el .rar que descargaste.
        </div>
        </center>
    </form>
</body>
</html>