
<head>
<title>Sesiones en PHP</title>
</head>
<body>
	<form method="post" action="../controlador/controlador.php" > <!-- cuando presionamos el boton ingresar se redirecciona al controlador gracias al action y le pasamos los datos del campo por el metodo post -->
    <center>
    <font color="#FF0000" size="+3" face="Lucida Sans Unicode, Lucida Grande, sans-serif"><b><i>Sesiones en PHP</i></b></font>
    <br />
    <font size="+2" color="#006600" face="Palatino Linotype, Book Antiqua, Palatino, serif">Autor:codigoweblibre.comli.com</font>
    <br />
    Algunos datos para probar.<br />
    Usuario: andres Contrase&ntilde;a: 12345<br />
    Usuario: fibonacci Contrase&ntilde;a: 1123581321
    </center>
    <hr />
    <table align="center">
    	<tr><td>Usuario:</td><td> <input type="text" name="nombre_usuario" id="nombre_usuario" required placeholder="andres" /></td></tr>
        <tr><td>Contrase&ntilde;a:</td><td> <input type="password" name="contrasena" id="contrasena" required placeholder="12345" /></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="Ingresar" /></td></tr>
    </table>
    </form>
    <div align="center">Para mas tutoriales visita:
    	<a href="<?php echo "http://".$_SERVER['SERVER_NAME']; ?>" target="_blank"><?php echo $_SERVER['SERVER_NAME']; ?></a> y suscribete para recibir a tu email los ultimos tutoriales y ejemplos.<br />
        </div>
</body>
</html>