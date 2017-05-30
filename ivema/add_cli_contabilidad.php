<?php



include_once "conectar.php"; 
include_once "funciones.php";




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

function add_cliente ($nombre, $cif, $codigo, $db)
{
$numero = 43000000;

$cod = $numero + $codigo;

if (!$db) 
{
    exit('Error en la conexión a la base de datos');
} 
else 
{
    $consulta = "SELECT * FROM F_CLI WHERE CIFCLI='".$cif."';";
echo "<p>".$consulta;
    $result = odbc_exec($db,$consulta);
    $filas = odbc_num_rows($result);
    echo "<p> Num filas: ".$filas;
    if ($filas<=0) 
    {

    $consulta = "INSERT INTO F_CLI (CODCLI, NOMCLI, CIFCLI) VALUES ('".$cod."','".$nombre."','".$cif."');";
    $result = odbc_exec($db,$consulta);
echo $consulta;
        
    } 
    else 
    {
		echo "<p>El cliente ".$cif." ya existe";
    }
}


}




$db = conectarbd();



$consulta2 = "Select * from accounts where deleted!=1;";

	$resultado2 = mysql_query($consulta2);	
while ($lafila=mysql_fetch_assoc($resultado2))
{

	$consulta3 = "Select * from accounts_cstm where id_c='".$lafila['id']."';";
echo "<p>".$consulta3;


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
	if ($lafila3['cif_c']!='')
{
	add_cliente ($lafila['name'], $lafila3['cif_c'], $lafila3['numero_c'], $db);
}

  }
  }

}






if (!$db) {
    exit('Error en la conexión a la base de datos');
} else {
    $consulta = "SELECT * FROM F_CLI";
    $result = odbc_exec($db,$consulta);
    if (!$result) {
        exit("Error en la consulta");
    } else {
        print "<table border=\"1\">\n  <tr>
    <th>Codigo</th>\n    <th>Nombre</th>\n  <th>CIF</th>\n </tr>\n";
        while ($valor = odbc_fetch_array($result)) {
            $codigo = $valor['CODCLI'];
            $nombre = $valor['NOMCLI'];
            $cif = $valor['CIFCLI'];
            print "  <tr>\n    <td>$codigo</td>\n    <td>$nombre</td>\n <td>$cif</td>\n  </tr>\n";
        }

        print "</table>\n";
     }
}    

desconectarbd($db);
?>