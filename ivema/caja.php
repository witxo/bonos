<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<head>
<title>IVEMA - Caja</title>

</head>
<?php
include "conectar.php"; 

function mysql_insert_array($table, $data, $password_field = "") {
	foreach ($data as $field=>$value) {
		$fields[] = '`' . $field . '`';
		
		if ($field == $password_field) {
			$values[] = "PASSWORD('" . mysql_real_escape_string($value) . "')";
		} else {
			$values[] = "'" . mysql_real_escape_string($value) . "'";
		}
	}
	$field_list = join(',', $fields);
	$value_list = join(', ', $values);
	
	$query = "INSERT INTO `" . $table . "` (" . $field_list . ") VALUES (" . $value_list . ")";
	
	
	return $query;
}	

?>
<body>


<?php

$ini =$_POST['ini'];
$tipo =$_POST['tipo'];
$fecha =$_POST['fecha'];
$cantidad =$_POST['cantidad'];
$desc =$_POST['desc'];
$actualizar =$_POST['actualizar'];


if ($ini == '1' and $actualizar == 'Actualizar')
{
	
	if ($cantidad != "")
	{

  	$mov_caja['tipo'] = $tipo;
	$mov_caja['fecha'] = $fecha;
	$mov_caja['hora'] = date("H:i:s");
    $cant = str_replace(",",".",$cantidad);
	$mov_caja['cantidad'] = $cant;
    $mov_caja['descripcion'] = $desc;
	$consulta3 = mysql_insert_array('movimientos_caja', $mov_caja);
	$resultado = mysql_query($consulta3);		
 
 
     $consulta = "Select * from caja where fecha ='".date("Y-m-d")."'";

	 $resultado = mysql_query($consulta, $conexion);
     $lineas = mysql_num_rows ($resultado);
     
     if ($lineas <= 0)
     {
        //echo "aqui1";
        
//        $consulta = "Select * from caja where fecha ='".date("Y-m-d", strtotime("yesterday"))."'";
        $consulta = "Select * from caja where fecha <'".date("Y-m-d")."'"." order by fecha desc";
        $resultado = mysql_query($consulta, $conexion);
        $lafila=mysql_fetch_array($resultado);
        
        
     	$caja['fecha'] = date("Y-m-d");
      
   			if ($tipo == 'E')
			{
                $caja['cantidad'] = $lafila['cantidad'] + $cant;
			}
			else
			{
                $caja['cantidad'] = $lafila['cantidad'] - $cant;

			}


	    $consulta3 = mysql_insert_array('caja', $caja);
     //echo $consulta3;
	    $resultado = mysql_query($consulta3);
     }
     else
     {
         //echo "aqui2";
        $lafila=mysql_fetch_array($resultado);
        
     	$caja['fecha'] = $lafila['fecha'];
      
   			if ($tipo == 'E')
			{
                $caja['cantidad'] = $lafila['cantidad'] + $cant;
			}
			else
			{
                $caja['cantidad'] = $lafila['cantidad'] - $cant;

			}
     
     //echo $caja['cantidad'];
        $consulta = "delete from caja where fecha ='".date("Y-m-d")."'";
	    $resultado = mysql_query($consulta);
     
	    $consulta3 = mysql_insert_array('caja', $caja);
	    $resultado = mysql_query($consulta3);
     }

	}
	
}
else
if ($ini == '1' and $guardar == 'Guardar Caja')
{
    $consulta = "Select * from movimientos_caja where fecha ='".date("Y-m-d")."'";
	
	 $resultado = mysql_query($consulta, $conexion);
	 
		 $cantidad_caja = 0;
		while ($lafila=mysql_fetch_array($resultado)) 
		{
			if ($lafila["tipo"] == 'E')
			{
				$cantidad_caja = $cantidad_caja + $lafila["cantidad"];
			}
			else
			{
				$cantidad_caja = $cantidad_caja - $lafila["cantidad"];
			
			}
		}


	
 
//    $consulta = "Select * from caja where fecha ='".date("Y-m-d", strtotime("yesterday"))."'";
        $consulta = "Select * from caja where fecha <'".date("Y-m-d")."'"." order by fecha desc";
    $resultado = mysql_query($consulta, $conexion);
    $lafila=mysql_fetch_array($resultado);

	$caja_total = $lafila["cantidad"];
 
	
    $consulta = "delete from caja where fecha ='".date("Y-m-d")."'";
	
	$resultado = mysql_query($consulta);	
	

	$caja['fecha'] = $fecha;
	$caja['cantidad'] = $cantidad_caja + $caja_total;

echo $caja['cantidad'];
	$consulta3 = mysql_insert_array('caja', $caja);
	$resultado = mysql_query($consulta3);		
	
}
?>

<form action="caja.php" method="post" name="caja">
Fecha: <input name="fecha" type="text" id="fecha" size="10" value="<?php echo date("Y-m-d"); ?>">
<p>
Tipo: <select name="tipo">
	       <option value="E" <?php if ($tipo == 'E') echo "selected";?>>Entrada en caja</option>
	       <option value="S" <?php if ($tipo == 'S') echo "selected";?>>Salida de caja</option>
</select>
<p>Cantidad: <input name="cantidad" type="text" size="20" value="<?php echo $cantidad; ?>">
<p>Descripcion: <input name="desc" type="text" size="180" value="<?php echo $desc; ?>">
	<input name="ini" type="hidden" value="1">
     
    <p><input name="actualizar" value="Actualizar" type="submit">
<?php

//<input name="guardar" value="Guardar Caja" type="submit">

?>
</form>
<?php
$caja_total = 0;

//    $consulta = "Select * from caja where fecha ='".date("Y-m-d", strtotime("yesterday"))."'";
        $consulta = "Select * from caja where fecha <'".date("Y-m-d")."'"." order by fecha desc";
	
	 $resultado = mysql_query($consulta, $conexion);
	 $lafila=mysql_fetch_array($resultado);
	 
	 $caja_total = $lafila["cantidad"];
	 


    $consulta = "Select * from movimientos_caja where fecha ='".date("Y-m-d")."'";
	
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
