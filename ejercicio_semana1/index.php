<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
</head>
<body>
    <form method="post">
    	<h1>Ingresa tu nombre</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="submit" name="register" value="Registrar">
    </form>
    <?php 
    include("registrar.php");
    ?>
</body>
</html>

<!--
<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Ingresa tu nombre</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="submit" name="register">
    </form>
        #<?php 
        #include("registrar.php");
        #?>
</body>
</html>
-->