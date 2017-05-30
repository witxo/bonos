<?php



include_once "conectar.php"; 
include_once "funciones.php";

$year = '2014';



function get_numero_cli ($factura)
{



	$consulta3 = "Select * from accounts_fact_facturas_c where accounts_fbc88acturas_idb='".$factura."';";
echo "<p>".$consulta3;


	$resultado3 = mysql_query($consulta3);	
  if (!$resultado3)
  {
	echo "<p> No hay registro";
  }
  else
  {
	$lafila3=mysql_fetch_array($resultado3);

  if (!($lafila3['id']))
  {
	echo "<p>Nada";
  }
  else
  {

		$consulta4 = "Select * from accounts_cstm where id_c='".$lafila3['accounts_f4ffcccounts_ida']."';";
echo "<p>".$consulta4;


	$resultado4 = mysql_query($consulta4);

  if (!$resultado4)
  {
	echo "<p> No hay registro";
  }
  else
  {
	$lafila4=mysql_fetch_array($resultado4);

  if (!($lafila4['id_c']))
  {
	echo "<p>Nada";
  }
  else
  {
return $lafila4['numero_c'];
  }
  }
}
}

}

function format_number ($numero)
{

return number_format($numero, 2, ',', '');

}


function conectarbd()
{
//$basededatos = 'ivema';
$basededatos = 'pruebas';

$db = odbc_connect($basededatos,"","");

return $db;
}

function desconectarbd($db)
{
odbc_close($db);
}

function add_factura ($db, $codfa, $fecfac, $clifac, $netfac, $basfac, $ivpfac, $ivcfac, $totfac, $fvefac)
{
$tipo = 1;



if (!$db) 
{
    exit('Error en la conexión a la base de datos');
} 
else 
{
    $consulta = "SELECT * FROM F_FAC WHERE CODFA='".$codfa."';";
echo "<p>".$consulta;
    $result = odbc_exec($db,$consulta);
    $filas = odbc_num_rows($result);
    echo "<p> Num filas: ".$filas;
    if ($filas<=0) 
    {

    $consulta = "INSERT INTO F_FAC (CODFAC, TIPFAC, FECFAC, CLIFAC, NETFAC, BASFAC, IVPFAC,  IVCFAC, TOTFAC, FVEFAC) VALUES ('".$codfa."','".$tipo."','".$fecfac."','".$clifac."','".$netfac."','".$basfac."','".$ivpfac."','".$ivcfac."','".$totfac."','".$fvefac."');";
    $result = odbc_exec($db,$consulta);
echo $consulta;
        
    } 
    else 
    {
		echo "<p>La factura ".$codfa." ya existe";
    }
}


}




function add_items_factura ($db, $id, $codfa)
{
$tipo = 1;




		//  Datos de fact_factura_items
			$consulta = "Select * from fact_factura_items where factura_id ='".$id."' and deleted != 1;";
			$resultado = mysql_query($consulta);	
			$num = 0;
			while ($lafila=mysql_fetch_assoc($resultado))
			{
				
				$num = $num + 1;	
				
			//  Datos de fact_item
				$consulta2 = "Select * from fact_items where id ='".$lafila['item_id']."' and deleted != 1;";
				$resultado2 = mysql_query($consulta2);	
				$lafila2=mysql_fetch_assoc($resultado2);

				$faclfa = $codfa;
				$ordlfa = $num;
				$canlfa = format_number($lafila2['cantidad']);
				$deslfa = $lafila2['name'];
				$punlfa = format_number($lafila2['precio_ud']);
				$totlfa = format_number($lafila2['total_antes']);


	
			
if (!$db) 
{
    exit('Error en la conexión a la base de datos');
} 
else 
{


    $consulta = "INSERT INTO F_LFA (TIPLFA, FACLFA, ORDLFA, CANLFA, DESLFA, PUNLFA, TOTLFA) VALUES ('".$tipo."','".$faclfa."','".$ordlfa."','".$canlfa."','".$deslfa."','".$punlfa."','".$totlfa."');";
    $result = odbc_exec($db,$consulta);
echo $consulta;
        

}	

			}












}






$db = conectarbd();



$consulta2 = "Select * from fact_facturas where deleted!=1 and fact_facturas_type = 'factura' and year ='$year' and (estado = 'emitida' or estado = 'pagada') order by numero;";
echo $consulta2;

	$resultado2 = mysql_query($consulta2);	
while ($lafila=mysql_fetch_assoc($resultado2))
{

$numerocli = get_numero_cli($lafila['id']);
$codfa = $lafila['numero'];
$fecfac = $lafila['date_closed'];
$clifac = 43000000 + $numerocli;
$netfac = format_number($lafila['total_base']);
$basfac = $netfac;
$ivpfac = format_number($lafila['repercutido']);
$ivcfac = format_number($lafila['total_iva']);
$totfac = format_number($lafila['amount']);
$fvefac = $fecfac;

add_factura ($db, $codfa, $fecfac, $clifac, $netfac, $basfac, $ivpfac, $ivcfac, $totfac, $fvefac);
add_items_factura ($db, $lafila['id'], $codfa);

}







?>