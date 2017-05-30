<?php



include_once "conectar.php"; 
include_once "funciones.php";

	    	$consulta = "Select * from accounts inner join accounts_cstm on id=id_c where deleted != 1;";

//$basededatos = 'ivema';
$basededatos = 'pruebas';

$db = odbc_connect($basededatos,"","");
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
        odbc_close($db);
        print "</table>\n";
     }
}    
?>