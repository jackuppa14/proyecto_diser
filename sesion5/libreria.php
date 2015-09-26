<?php 

function EncontraReg($nroreg)
{
	$consulta="select * from devices where id=$nroreg";
	$res=mysql_query($consulta);
	$fila=mysql_fetch_array($res);
	return $fila;
}

function borrar($id)
{
	$sql="delete from devices where id=$id";
	mysql_query($sql);
	echo 'Registro Eliminado con Exito!';
}

function ingreso(){
if (isset($_POST['id']))
	{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$unam_stock_number=$_POST['unam_stock_number'];
	$location=$_POST['location'];
	$cad="INSERT INTO devices (id, name, unam_stock_number, location) VALUES ('".$id."','".$name."''".$unam_stock_number."','".$location."')";

	mysql_query($cad); 
	echo "Dispositivo Ingresado";
	}
}


function editar($nroreg)
{
	$consulta="select * from devices where id=$nroreg";
	$resultado=mysql_query($consulta);
	$fila=mysql_fetch_array($resultado);
	return $fila;

}

function grabar($id,$name,$unam_stock_number,$location)
{
	if (isset($id))
	{
		$cad="UPDATE devices set id='$id', name='$name', unam_stock_number='$unam_stock_number', location='$location' where id=$id";
		mysql_query($cad);
		echo "<p>Registro Actualizado!</p>";
	}
}

?>


<?php 
function verregistros()
{
	$consulta="select * from devices";
	$resultado=mysql_query($consulta);
	$num_resultado=mysql_num_rows($resultado);
	
	echo "<br>Numero de dispositivos encontrados: ".$num_resultado."<br>";
	
echo '<style type="text/css"> .Estilo3 {color: #FFF; font-weight:bold;}</style>
<div style="overflow: auto; width: 480px; height: 150px;">
<body><table width="400" border="1">
  <tr class="Estilo3">
    <td bgcolor="#666666"><span class="Estilo3">ID</span></td>
    <td bgcolor="#666666"><span class="Estilo3">NOMBRE</span></td>
    <td bgcolor="#666666"><span class="Estilo3">UNAM STOCK NUMBER</span></td>
    <td bgcolor="#666666"><span class="Estilo3">LOCATION</span></td>
    <td bgcolor="#666666"><span class="Estilo3">EDITAR</span></td>
    <td bgcolor="#666666"><span class="Estilo3">BORRAR</span></td>
  </tr>';


	for ($i=0; $i<$num_resultado; $i++){
		$fila=mysql_fetch_array($resultado);
		echo "<tr>";
    	echo 	"<td>".$fila['id']."</td>";
    	echo 	"<td>".$fila['name']."</td>";
    	echo 	"<td>".$fila['unam_stock_number']."</td>";
    	echo 	"<td>".$fila['location']."</td>";
		echo 	"<td>".'<a href="editar.php?nro='.$fila['id'].'" title="'.$fila['id'].'">EDITAR</a>'."</td>";
		echo 	"<td>".'<a href="borrar.php?nro='.$fila['id'].'" title="'.$fila['id'].'">BORRAR</a>'."</td>";
  		echo "</tr>";
	}

echo '</table>';
echo '</div>';
}
?>  

