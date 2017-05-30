<html>
<head>
<title>IVEMA - IVA</title>

</head>
<?php
include "conectar.php"; 


if ($ini!=1)
{
	$anyo = date(Y);
	$mes_desde = "01";
	$mes_hasta = "12";
	
	
}
?>

<body>


<form action="iva.php" method="get" name="IVA">
<p> A&ntilde;o: 
	  <select name="anyo">    
	       <option value="2010" <? if ($anyo == '2010') echo "selected";?>>2010</option>
	       <option value="2011" <? if ($anyo == '2011') echo "selected";?>>2011</option>
	       <option value="2012" <? if ($anyo == '2012') echo "selected";?>>2012</option>
	       <option value="2013" <? if ($anyo == '2013') echo "selected";?>>2013</option>
	       <option value="2014" <? if ($anyo == '2014') echo "selected";?>>2014</option>
	  </select>
</p>      
<p>Mes Desde:       
	  <select name="mes_desde">    
	       <option value="01" <? if ($mes_desde == '01') echo "selected";?>>Enero</option>
	       <option value="02" <? if ($mes_desde == '02') echo "selected";?>>Febrero</option>
	       <option value="03" <? if ($mes_desde == '03') echo "selected";?>>Marzo</option>
	       <option value="04" <? if ($mes_desde == '04') echo "selected";?>>Abril</option>
	       <option value="05" <? if ($mes_desde == '05') echo "selected";?>>Mayo</option>
	       <option value="06" <? if ($mes_desde == '06') echo "selected";?>>Junio</option>
	       <option value="07" <? if ($mes_desde == '07') echo "selected";?>>Julio</option>
	       <option value="08" <? if ($mes_desde == '08') echo "selected";?>>Agosto</option>
	       <option value="09" <? if ($mes_desde == '09') echo "selected";?>>Septiembre</option>
	       <option value="10" <? if ($mes_desde == '10') echo "selected";?>>Octubre</option>
	       <option value="11" <? if ($mes_desde == '11') echo "selected";?>>Noviembre</option>
	       <option value="12" <? if ($mes_desde == '12') echo "selected";?>>Diciembre</option>
	  </select>
      </p>
<p>Mes Hasta:        
	  <select name="mes_hasta">    
	       <option value="01" <? if ($mes_hasta == '01') echo "selected";?>>Enero</option>
	       <option value="02" <? if ($mes_hasta == '02') echo "selected";?>>Febrero</option>
	       <option value="03" <? if ($mes_hasta == '03') echo "selected";?>>Marzo</option>
	       <option value="04" <? if ($mes_hasta == '04') echo "selected";?>>Abril</option>
	       <option value="05" <? if ($mes_hasta == '05') echo "selected";?>>Mayo</option>
	       <option value="06" <? if ($mes_hasta == '06') echo "selected";?>>Junio</option>
	       <option value="07" <? if ($mes_hasta == '07') echo "selected";?>>Julio</option>
	       <option value="08" <? if ($mes_hasta == '08') echo "selected";?>>Agosto</option>
	       <option value="09" <? if ($mes_hasta == '09') echo "selected";?>>Septiembre</option>
	       <option value="10" <? if ($mes_hasta == '10') echo "selected";?>>Octubre</option>
	       <option value="11" <? if ($mes_hasta == '11') echo "selected";?>>Noviembre</option>
	       <option value="12" <? if ($mes_hasta == '12') echo "selected";?>>Diciembre</option>
	  </select>      
</p>      
	<input name="ini" type="hidden" value="1">
    <p>% Iva Real: 
	<input name="iva_real" type="text" value="<? echo $iva_real; ?>">   </p>
     
    <input name="Submit" type="submit">
</form>


<?

	if ($ini == '1')
	{
		$date_start = $anyo.'-'.$mes_desde.'-01';
		$date_end = $anyo.'-'.$mes_hasta.'-31';
//	$date_start =  "2011-01-01";
//	$date_end =  "2011-12-31";
	

//echo $date_start.' ';
//mbrecho $date_end.' ';
		  

// Ingresos reales
        $consulta_ing_real =  'SELECT '.
                  '  sum(amount) as total, '.
                  '  count(*) as fact_count '.
                  ' FROM fact_facturas INNER JOIN fact_facturas_cstm '.
				  ' ON  id = id_c '.
				  ' WHERE fact_facturas.date_closed >= DATE_FORMAT("'.$date_start.'", "%Y-%m-%d %H:%i:%s") '.
                  '  AND fact_facturas.date_closed <= DATE_FORMAT("'.$date_end.'", "%Y-%m-%d %H:%i:%s") '.
				  '  AND ( estado = \'emitida\' OR estado = \'pagada\') '.
                  '  AND fact_facturas.deleted=0 AND ( fact_facturas_type=\'factura\' OR fact_facturas_type=\'recibo\')'.'  AND ingreso_si_no_c != \'No\' ';


// Ingresos totales		  
        $consulta_ing =  'SELECT '.
                  '  sum(amount) as total, '.
                  '  count(*) as fact_count '.
                  ' FROM fact_facturas INNER JOIN fact_facturas_cstm '.
				  ' ON  id = id_c '.
				  ' WHERE fact_facturas.date_closed >= DATE_FORMAT("'.$date_start.'", "%Y-%m-%d %H:%i:%s") '.
                  '  AND fact_facturas.date_closed <= DATE_FORMAT("'.$date_end.'", "%Y-%m-%d %H:%i:%s") '.
                  '  AND fact_facturas.deleted=0 AND ( fact_facturas_type=\'factura\' )'.
  				  '  AND ( estado = \'emitida\' OR estado = \'pagada\') '.
                  '  AND ingreso_si_no_c != \'No\' ';
  
  
// Ingresos totales	(SOLO FACTURACION CON IVA)	  
        $consulta_ing_iva =  'SELECT '.
                  '  sum(amount) as total, '.
                  '  sum(total_iva) as total_iva, '.
				  '  count(*) as fact_count '.
                  ' FROM fact_facturas INNER JOIN fact_facturas_cstm '.
				  ' ON  id = id_c '.
				  ' WHERE fact_facturas.date_closed >= DATE_FORMAT("'.$date_start.'", "%Y-%m-%d %H:%i:%s") '.
                  '  AND fact_facturas.date_closed <= DATE_FORMAT("'.$date_end.'", "%Y-%m-%d %H:%i:%s") '.
                  '  AND fact_facturas.deleted=0 AND ( fact_facturas_type=\'factura\' )'.
 				  '  AND ( estado = \'emitida\' OR estado = \'pagada\') '.
                  '  AND ingreso_si_no_c != \'No\' '.
				  '  AND total_iva != "0.00"';
				  
				  
				  
				  
// Ingresos totales	(SOLO FACTURACION CON IVA)	  
        $consulta_gasto_iva =  'SELECT '.
                  '  sum(amount) as total_gasto, '.
                  '  sum(total_iva) as total_iva_sop, '.
				  '  count(*) as fact_count '.
                  ' FROM fact_facturas INNER JOIN fact_facturas_cstm '.
				  ' ON  id = id_c '.
				  ' WHERE fact_facturas.date_closed >= DATE_FORMAT("'.$date_start.'", "%Y-%m-%d %H:%i:%s") '.
                  '  AND fact_facturas.date_closed <= DATE_FORMAT("'.$date_end.'", "%Y-%m-%d %H:%i:%s") '.
                  '  AND fact_facturas.deleted=0 AND ( fact_facturas_type=\'factura proveedor\' )'.
   				  '  AND ( estado = \'emitida\' OR estado = \'pagada\') '.
				  '  AND total_iva != "0.00"';				  
				  
				  
  
//  echo $consulta_ing;
//  echo " ";
//  echo $consulta_gasto_iva;
  
  

		  
$resultado = mysql_query($consulta_ing_real);
$row = mysql_fetch_assoc($resultado);
$ingresos_tot_real = $row["total"];
		  
		  
$resultado = mysql_query($consulta_ing);
$row = mysql_fetch_assoc($resultado);
$ingresos_tot = $row["total"];

$resultado = mysql_query($consulta_ing_iva);
$row = mysql_fetch_assoc($resultado);
$ingresos_tot_iva = $row["total"];
$iva_repercutido = $row["total_iva"];

$porcentaje_iva = $ingresos_tot_iva * 100 / $ingresos_tot;


$resultado = mysql_query($consulta_gasto_iva);
$row = mysql_fetch_assoc($resultado);
$iva_soportado = $row["total_iva_sop"];





echo "<p>Ingresos reales: ".number_format($ingresos_tot_real,2,',','.')." &#8364;</p>";

echo "<p>Ingresos totales: ".number_format($ingresos_tot,2,',','.')." &#8364;</p>";
echo "<p>Ingresos totales (IVA): ".number_format($ingresos_tot_iva,2,',','.')." &#8364;</p>";
echo "<p>Porcentaje Facturacion IVA: ".number_format($porcentaje_iva,2,',','.')." %</p>";



echo "<p>IVA Repercutido: ".number_format($iva_repercutido,2,',','.')." &#8364;</p>";
echo "<p>IVA Soportado: ".number_format($iva_soportado,2,',','.')." &#8364;</p>";

if ($iva_real == "")
	$iva_real = $porcentaje_iva;
	
$iva_hacienda = $iva_soportado * $iva_real / 100 - $iva_repercutido;
echo "<p>IVA Hacienda (Negativo a pagar): ".number_format($iva_hacienda,2,',','.')." &#8364;</p>";






		  



 @mysql_free_result($resultado);
	}
  ?>
<br>
<br>
</body>
</html>
