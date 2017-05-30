<?php
include_once "conectar.php"; 

function get_nombre_account_factura ($id)
{

	 $consulta = "Select * from accounts_fact_facturas_c where accounts_fbc88acturas_idb='$id' and deleted != 1;";
//	 echo $consulta;
     $resultado = mysql_query($consulta);
	 $lafila = mysql_fetch_array($resultado);
	 
	 $id_cli = $lafila["accounts_f4ffcccounts_ida"];
	 

	 $consulta2 = "Select * from accounts where id='$id_cli' and deleted != 1;";
//	 echo $consulta2;	 
     $resultado2 = mysql_query($consulta2);
	 $lafila2 = mysql_fetch_array($resultado2);
	 
	 return $lafila2["name"];
	 
	 

	
}
?>