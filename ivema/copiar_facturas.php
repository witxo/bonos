<html>
<head>
<title>IVEMA - Copiar Facturas</title>

</head>
<?php
include "conectar.php"; 


 
function create_guid()
{
	$microTime = microtime();
	list($a_dec, $a_sec) = explode(" ", $microTime);

	$dec_hex = dechex($a_dec* 1000000);
	$sec_hex = dechex($a_sec);

	ensure_length($dec_hex, 5);
	ensure_length($sec_hex, 6);

	$guid = "";
	$guid .= $dec_hex;
	$guid .= create_guid_section(3);
	$guid .= '-';
	$guid .= create_guid_section(4);
	$guid .= '-';
	$guid .= create_guid_section(4);
	$guid .= '-';
	$guid .= create_guid_section(4);
	$guid .= '-';
	$guid .= $sec_hex;
	$guid .= create_guid_section(6);

	return $guid;

}

function create_guid_section($characters)
{
	$return = "";
	for($i=0; $i<$characters; $i++)
	{
		$return .= dechex(mt_rand(0,15));
	}
	return $return;
}

function ensure_length(&$string, $length)
{
	$strlen = strlen($string);
	if($strlen < $length)
	{
		$string = str_pad($string,$length,"0");
	}
	else if($strlen > $length)
	{
		$string = substr($string, 0, $length);
	}
}

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

<?

		$mes = substr ($fecha2,5,2);
		$anyo = substr ($fecha2,0,4);
		$fecha_letra = get_mes_anyo ($mes, $anyo);


	for ($i=1;$i<$numero;$i++)
	{

		if ($facturas[$i] != '')
		{
	
	
		//  Datos de fact_factura
			$consulta = "Select * from fact_facturas where id ='".$facturas[$i]."' and deleted != 1;";
			$resultado = mysql_query($consulta);	
			$lafila=mysql_fetch_assoc($resultado);
			
		
		//  Siguiente numero factura
			$consulta2 = "Select MAX(numero) as maximo from fact_facturas where year ='".$lafila['year']."' and deleted != 1;";
//			echo $consulta2;
			$resultado2 = mysql_query($consulta2);	
			$lafila2=mysql_fetch_array($resultado2);
			$numero_sig = $lafila2['maximo'] + 1;
			 
		//  Cambiamos datos de fact_factura	
			$lafila['numero'] = $numero_sig;
			if ($fecha2 == '')
			{
				$fecha2 = date ("Y-m-d");
				$fecha_letra = get_mes_anyo (date(m), date(Y));
			}


			$lafila['date_closed'] = $fecha2;
			$guid_fact_factura = create_guid();
			$lafila['id'] = $guid_fact_factura;
			$lafila['name'] = $fecha_letra;
			echo $cantidad;
			if ($cantidad != '')
			{
				$lafila['total_items'] = $cantidad;
				$lafila['total_descuento'] = 0;
				$lafila['total_base'] = $cantidad;
				$lafila['amount'] = $cantidad;
			}
		
			$consulta3 = mysql_insert_array('fact_facturas', $lafila);
			$resultado = mysql_query($consulta3);	
			
			
			
		//  Datos de fact_factura_cstm
			$consulta4 = "Select * from fact_facturas_cstm where id_c ='".$facturas[$i]."';";
//			echo $consulta4;
			$resultado4 = mysql_query($consulta4);	
			$lafila4=mysql_fetch_assoc($resultado4);

			
			$lafila4['id_c'] = $guid_fact_factura;
			$consulta5 = mysql_insert_array('fact_facturas_cstm', $lafila4);
			echo $consulta5;
			$resultado5 = mysql_query($consulta5);							
			
			
		//  Datos de accounts_fact_facturas_c
			$consulta4 = "Select * from accounts_fact_facturas_c where accounts_fbc88acturas_idb ='".$facturas[$i]."' and deleted != 1;";
			//echo $consulta4;			
			$resultado4 = mysql_query($consulta4);	
			$lafila4=mysql_fetch_assoc($resultado4);
			
			$lafila4['accounts_fbc88acturas_idb'] = $guid_fact_factura;
			$lafila4['id'] = create_guid();
			$consulta5 = mysql_insert_array('accounts_fact_facturas_c', $lafila4);
			$resultado5 = mysql_query($consulta5);	
					
					
					
		//  Datos de fact_factura_items
			$consulta = "Select * from fact_factura_items where factura_id ='".$facturas[$i]."' and deleted != 1;";
			$resultado = mysql_query($consulta);	
			while ($lafila=mysql_fetch_assoc($resultado))
			{
				
				$lafila['id'] = create_guid();
				$lafila['factura_id'] = $guid_fact_factura;
				
			//  Datos de fact_item
				$consulta2 = "Select * from fact_items where id ='".$lafila['item_id']."' and deleted != 1;";
				$resultado2 = mysql_query($consulta2);	
				$lafila2=mysql_fetch_assoc($resultado2);	
				
				$lafila2['id'] = create_guid();
				$lafila['item_id'] = $lafila2['id'];
				$lafila2['name'] = $fecha_letra;
				if ($cantidad != '')
				{
					$lafila2['precio_ud'] = $cantidad;
					$lafila2['cantidad'] = '1.00';
					$lafila2['descuento'] = NULL;
				}
				$consulta3 = mysql_insert_array('fact_items', $lafila2);
				$resultado3 = mysql_query($consulta3);			
				
				$consulta4 = mysql_insert_array('fact_factura_items', $lafila);
				$resultado4 = mysql_query($consulta4);							
							
				
			}
			
			
			
		}
	}
?>


</body>
</html>
