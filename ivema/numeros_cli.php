<?php

include "conectar.php"; 

			$consulta2 = "Select MAX(numero_c) as maximo from accounts_cstm;";

	$resultado2 = mysql_query($consulta2);	
			$lafila2=mysql_fetch_array($resultado2);

$numero_sig = $lafila2['maximo'];


if ($numero_sig == 0)
{
	$numero_sig = 0;
}

	$numero_sig = $numero_sig + 1;

//echo 'numero: ' . $numero_sig;



			$consulta2 = "Select * from accounts where deleted!=1;";

	$resultado2 = mysql_query($consulta2);	
while ($lafila=mysql_fetch_assoc($resultado2))
{
-
	$consulta3 = "Select * from accounts_cstm where id_c='".$lafila['id']."' and numero_c='0';";
echo $consulta3;
	$resultado3 = mysql_query($consulta3);	
if (!$resultado3)
{
	echo "<p> No hay registro";
}
else
{
$lafila3=mysql_fetch_array($resultado3);
if (!($lafila3['id_c']))
{
	echo "<p>Nada";
}
else
{


	$sql = "update accounts_cstm set numero_c =".$numero_sig." where id_c='".$lafila3['id_c']."';";

echo "<p>".$sql;



$numero_sig = $numero_sig + 1;
echo "<p>".$numero_sig;



	$resultado4 = mysql_query($sql);
}
}


}
?>