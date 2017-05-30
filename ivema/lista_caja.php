<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<head>
<title>IVEMA - Caja</title>

</head>
<?php
include "conectar.php"; 



?>
<body>


<?php

	
 
$fecha = $_POST['fecha'];

if ($fecha == "")
	$fecha = date("Y-m-d");
?>

<form action="lista_caja.php" method="post" name="caja">
Fecha: <input name="fecha" type="text" id="fecha" size="10" value="<?php echo $fecha; ?>">
     
    <p><input name="buscar" value="Buscar" type="submit">
<?php

//<input name="guardar" value="Guardar Caja" type="submit">

?>
</form>
<?php
$caja_total = 0;

//    $consulta = "Select * from caja where fecha ='".date("Y-m-d", strtotime("yesterday"))."'";
        $consulta = "Select * from caja where fecha <'".$fecha."'"." order by fecha desc";
	
	 $resultado = mysql_query($consulta, $conexion);
	 $lafila=mysql_fetch_array($resultado);
	 
	 $caja_total = $lafila["cantidad"];
	 


    $consulta = "Select * from movimientos_caja where fecha ='".$fecha."'";
	
	 $resultado = mysql_query($consulta, $conexion);

?>

 <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#0000FF" align="center">
    <tr bgcolor="#BFCDDB"> 
      <td>Hora</td>    
      <td>Tipo</td>    
      <td>Cantidad (. como decimal)</td>
      <td>Descripcion</td>

    </tr>
    <tr bgcolor="#97FFFF">
      <td>Dia Anterior</td>    
      <td></td>
      <td><?php echo str_replace('.',',',$caja_total);?></td>
      <td></td>
    
    </tr>
    <?php while ($lafila=mysql_fetch_array($resultado)) 
		{

    echo "<tr>";
	echo "<td>".$lafila["hora"]."</td>";
	
	if ($lafila["tipo"] == 'E')
	{
		echo '<td>';
		echo "Entrada";
		$caja_total = $caja_total + $lafila ["cantidad"];
	echo "</td>";
	echo "<td  bgcolor='#66FFCC'>".str_replace('.',',',$lafila["cantidad"])."</td>";
 	echo "<td>".$lafila["descripcion"]."</td>";
	}
	else
	{
		echo '<td>';
		 echo "Salida";
		$caja_total = $caja_total - $lafila ["cantidad"];
	echo "</td>";
	echo "<td bgcolor='#FF4848'>".str_replace('.',',',$lafila["cantidad"])."</td>";
 	echo "<td>".$lafila["descripcion"]."</td>";
	}

    echo "</tr>";
		}
    ?>
    <tr bgcolor="#97FFFF"> 
      <td>Total</td>    
      <td></td>
      <td><?php echo $caja_total; ?></td>
      <td></td>
    
    </tr>    
</table>
</body>
</html>
