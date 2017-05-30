<?php

include_once "conectar.php"; 
include_once "funciones.php";
function get_mes_anyo ($mes, $anyo)
{
	if (($mes == '01') or ($mes == '1'))
	{
		$fecha = 'Enero '. $anyo;
	}
	elseif (($mes == '02') or ($mes == '2'))
	{
		$fecha = 'Febrero '. $anyo;
	}
	elseif (($mes == '03') or ($mes == '3'))
	{
		$fecha = 'Marzo '. $anyo;
	}
	elseif (($mes == '04') or ($mes == '4'))
	{
		$fecha = 'Abril '. $anyo;
	}
	elseif (($mes == '05') or ($mes == '5'))
	{
		$fecha = 'Mayo '. $anyo;
	}
	elseif (($mes == '06') or ($mes == '6'))
	{
		$fecha = 'Junio '. $anyo;
	}
	elseif (($mes == '07') or ($mes == '7'))
	{
		$fecha = 'Julio '. $anyo;
	}
	elseif (($mes == '08') or ($mes == '8'))
	{
		$fecha = 'Agosto '. $anyo;
	}
	elseif (($mes == '09') or ($mes == '9'))
	{
		$fecha = 'Septiembre '. $anyo;
	}
	elseif (($mes == '10') or ($mes == '10'))
	{
		$fecha = 'Octubre '. $anyo;
	}
	elseif (($mes == '11') or ($mes == '11'))
	{
		$fecha = 'Noviembre '. $anyo;
	}
	elseif (($mes == '12') or ($mes == '12'))
	{
		$fecha = 'Diciembre '. $anyo;
	};

	return $fecha;

}


$consulta = "SELECT * FROM fact_facturas WHERE date_closed >= '2011-03-01' and deleted !=1 and fact_facturas_type='factura';";

     $resultado = mysql_query($consulta);


$numero = 0;
 	while ($facturas=mysql_fetch_array($resultado)) 
	{
		$numero = $numero + 1;
		$mes = substr ($facturas['date_closed'],5,2);
		$anyo = substr ($facturas['date_closed'],0,4);
		
		
		$fecha_letra = get_mes_anyo ($mes, $anyo);
		$consulta = "update fact_facturas set name='".$fecha_letra."' where id = '".$facturas['id']."';";

     	$resultado_up = mysql_query($consulta);
		
		//  Datos de fact_factura_items
			$consulta2 = "Select * from fact_factura_items where factura_id ='".$facturas['id']."' and deleted != 1;";
			$resultado2 = mysql_query($consulta2);	
			while ($items=mysql_fetch_assoc($resultado2))
			{
				
			//  Datos de fact_item
				$consulta3 = "Select * from fact_items where id ='".$items['item_id']."' and deleted != 1;";
				$resultado3 = mysql_query($consulta3);	
				$item=mysql_fetch_assoc($resultado3);	
				
				$consulta = "update fact_items set name='".$fecha_letra."' where id = '".$item['id']."';";

    		 	$resultado_up2 = mysql_query($consulta);				
							
				
			}		
		
	
		
	}


	echo $numero." registros actualizados";

?>
