<?php include ('libreria.php');
//$amigo=EncontrarReg($_GET['nro']);

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<h1>Borrar Registro</h1>
<?php 
	$a=borrar($_GET['nro']);
?>
<p><a href="index.php">Lista de Amigos</a></p>
</body>
</html>