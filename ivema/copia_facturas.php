<html>
<head>
<title>IVEMA - Copia Facturas</title>

</head>
<?php
include_once "conectar.php"; 
include_once "funciones.php";

?>

<body>
<form name="form1" method="get" action="copia_facturas.php">
  <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#0066FF">
    <tr> 
      <td width="18%" class="primeralineaizquierda_n">A&ntilde;o:</td>
      <td width="64%" ><input name="anyo" type="text" id="anyo" size="4" maxlength="4" value="<? echo $anyo; ?>"></td>
 
    </tr>  


    </table>
          <input type="submit" name="Submit" value="Buscar facturas">
          <input type="hidden" name="ini" value="1">    
 </form>
<?
	if ($ini == '1')
	{
		if ($anyo != ''	)
		{	
	    	$consulta = "Select * from fact_facturas where year = '".$anyo."' and deleted != 1 order by numero desc;";
		}
		else $consulta = "Select * from fact_facturas where deleted != 1 order by numero desc;";





     $resultado = mysql_query($consulta);
     $filas=mysql_num_rows($resultado);
	 if (empty($numi)) { $numi=0; }
	 print "<center><font size=2 face='Verdana, Arial, Helvetica, sans-serif'>Numero de facturas: " . $filas . "</font></center><br>";

   ?>

<form name="form2" method="get" action="copiar_facturas.php">
<table>
    <tr> 
      <td width="18%" class="primeralineaizquierda_n">Fecha:</td>
      <td width="64%" ><input name="fecha2" type="text" id="fecha2" size="10" maxlength="10" value="<? echo $fecha2; ?>"></td>
 
    </tr>
    <tr> 
      <td width="18%" class="primeralineaizquierda_n">Cantidad:</td>
      <td width="64%" ><input name="cantidad" type="text" id="cantidad" size="10" maxlength="10" value="<? echo $cantidad; ?>"></td>
 
    </tr>
    <tr>
    <td>
    <input type="submit" name="Submit" value="Copiar facturas"> 
    </td>
    </tr>
</table>    
  <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#0066FF" align="center">
    <tr bgcolor="#0099CC"> 
		<td width="10%" class="primeralinea">Copiar?</td>    
        <td width="9%" class="primeralinea">Factura</td>
        <td width="17%" class="primeralinea">Cliente</td>
        <td width="20%" class="primeralinea">Cantidad</td>
        <td width="44%" class="primeralinea">Fecha</td>
        
        
        
    </tr>



 <? 
 
 	$numero = 1;
 	while ($lafila=mysql_fetch_array($resultado)) {
		 
    ?>
	<tr><td><input type="checkbox" name="<? echo 'facturas['.$numero.']'; ?>" value="<? echo $lafila['id']; ?>"></td>
    
<?    
		echo '<td>'.$lafila['year'].'-'.$lafila['numero'].'</td>';
		echo '<td>'.get_nombre_account_factura ($lafila['id']).'</td>';
		echo '<td>'.$lafila['amount'].'</td>';
		echo '<td>'.$lafila['date_closed'].'</td></tr>';
 		
		

		
		$numero = $numero + 1;
	 }

      ?>
   </table>

<?
	}
	?>
          <input type="hidden" name="numero" value="<? echo $numero; ?>">  
              
   
</form>
</body>
</html>
