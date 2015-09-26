<?php 
$server_name = $_POST['server_name'];
$db_user = $_POST['db_user'];
$db_pass = $_POST['db_pass'];
$db_name = $_POST['db_name'];

mysql_pconnect($server_name, $db_user, $db_pass);
mysql_select_db($db_name);
include ('libreria.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<h1>Configuracion de BD</h1>
<?php 
$b=verregistros();
?>
<p><a href="devices.html">Nuevo Dispositivo</a></p>
</body>
</html>