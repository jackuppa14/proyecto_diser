<?php include ('libreria.php'); 
$amigo=editar($_GET['nro']);
//echo $amigo['id'],'<br>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<h1>Editar</h1>
<form id="form1" name="form1" method="post" action="">
  <input type="text" value="<?php echo $amigo['id'];?>" name="id" id="id" hidden/>
  <p>
    <label for="Nombre"></label>
    <label for="nom">Nombre</label>
    <input type="text" value="<?php echo $amigo['nombre'];?>" name="nom" id="nom" />
  </p>
  <p>
    <label for="dir">Direccion</label>
    <input type="text" value="<?php echo $amigo['direccion'];?>" name="dir" id="dir" />
  </p>
  <p>
    <label for="tel">Telefono</label>
    <input type="text" value="<?php echo $amigo['telefono'];?>" name="tel" id="tel" />
  </p>
  <p>
    <input type="submit" name="Aceptar" id="Aceptar" value="Aceptar" />
  </p>
</form>
<?php 

if (isset($_POST['id']))
{
	$a=grabar($_POST['id'],$_POST['nom'],$_POST['dir'],$_POST['tel']);
}

?>

<p><a href="index.php">Lista de Amigos</a></p>
<p>&nbsp;</p>
</body>
</html>