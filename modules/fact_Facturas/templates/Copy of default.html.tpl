<style type="text/css">
<!--
	table.page_header {
	  width: 100%; 
	  border: none; 
	  background-color: #FFF; 
	  border-bottom: solid 0.2mm #888; 
	  padding: 15mm; 
	  padding-bottom: 0mm; }
	table.page_footer {
	width: 100%;
	border: none;
	background-color: #FFF;
	padding: 15mm;
}
	div.note {
	  border: solid 0.8mm #DDDDDD;
	  background-color: #EEEEEE; 
	  padding: 2mm; 
	  border-radius: 2mm; 
	  width: 100%; }
	ul.main { width: 95%; list-style-type: square; }
	ul.main li { padding-bottom: 2mm; }
	h1 { text-align: center; font-size: 20mm}
	h3 { text-align: center; font-size: 14mm}
	p {margin: 0.8mm;}
	table.detalle td {text-align: right; padding:1mm; vertical-align: top;}
	table.detalle th {text-align: right; width:{{$Width}}%;  padding:1mm;}
	.descripcion {
	  border-bottom: solid 0.1mm #000;
	  font-size:80%;
	  color:#222;
	  text-align:left;
	  font-style:italic; 
	  padding-left:5mm;
	  padding-right:5mm;
	}
-->
</style>
<page backtop="40mm" backbottom="34mm" backleft="15mm" backright="15mm" style="font-size: 11pt">
	<page_header>
		<table class="page_header">
			<tr>
				<td style="width: 70%; text-align: left;vertical-align: bottom;">
					{{if isset($Logo)}}<img src="{{$Logo}}" style="height: 17mm">{{/if}}
				</td>
				<td style="width: 30%; text-align: right;vertical-align: bottom;">
					Página [[page_cu]]/[[page_nb]]
			  </td>
			</tr>
		</table>
	</page_header>
	<page_footer class="page_footer">
		<table class="page_footer">
			<tr>
			  <td style="text-align: center; border-top: solid 0.2mm #000;"">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inscrita en el Registro Mercantil de Madrid, Tomo 28093, Libro 0, Folio 51, Seccion 8, Hoja M 506205.
			  </td>
			</tr>
	  </table>
	</page_footer>
	
	<!-- Información general de la factura -->
	<table style="width:100%;">
	  <tr><td style="text-align: left; vertical-align: top;width:40%;">
			<table>
			  <!-- Datos del Facturador -->
			  <tr>
			      <td></td><td>{{$NombreFacturador}}</td></tr>
			  <tr><td></td><td>{{$Seller.Address}}</td></tr>
			  <tr><td></td><td>{{$Seller.PostCode}} {{$Seller.Town}}</td></tr>
			  <tr><td></td><td>{{$Seller.Province}} (Spain)</td></tr>
			  <tr><td></td><td>{{$Seller.TaxIdentificationNumber}}</td></tr>
               <tr><td></td>
               <td>Tfno: 91 511 37 23 - 644 05 77 27</td></tr>
               <tr><td></td>
               <td>Fax: 91 511 37 23</td></tr>
               <tr><td></td><td>admin@ivema.es</td></tr>
			  <tr><td></td><td></td></tr>


			</table>
		</td>
    <td style="vertical-align: top;width:60%;">
      <!-- Datos de la factura -->
      <table style="width:97%;">
        <tr>
          <td width="32%" style="width:30%;text-align: right;vertical-align: top;">Num factura:</td>
          <td width="58%" style="width:70%;text-align: right;vertical-align: top;">{{$Identifier}} </td>
        </tr>
        <tr>
          <td style="width:32%;text-align: right;vertical-align: top;">Fecha:</td>
          <td style="width:58%;text-align: right;vertical-align: top;">{{$i.IssueDate}} </td>
        </tr>
                <tr>
<td>&nbsp;</td><td>&nbsp;</td>
        </tr>
        <tr>
          <td style="width:32%;text-align: right;vertical-align: top;">Cliente:</td>
          <td style="width:58%;text-align: right;vertical-align: top;">{{$Buyer.CorporateName}}</td>
        </tr>
        <tr>
          <td style="width:32%;text-align: right;vertical-align: top;">DNI / CIF:</td>
          <td style="width:58%;text-align: right;vertical-align: top;">{{$Buyer.TaxIdentificationNumber}}</td>
        </tr>        
        <tr>
          <td style="width:32%;text-align: right;vertical-align: top;">Dirección:</td>
          <td style="width:58%;text-align: right;vertical-align: top;">{{$Buyer.Address}} </td>
        </tr>
        <tr>
          <td style="width:32%;text-align: right;vertical-align: top;"></td>
          <td style="width:58%;text-align: right;vertical-align: top;">{{$Buyer.PostCode}} {{$Buyer.Town}} </td>
        </tr>
        <tr>
          <td style="width:32%;text-align: right;vertical-align: top;"></td>
          <td style="width:58%;text-align: right;vertical-align: top;">{{$Buyer.Province}} </td>
        </tr>

                
      </table>
    </td>
    </tr>
      <tr><td colspan="2" style="border-bottom: solid 0.2mm #000;"></td></tr>
	</table>
   

  <!-- Descripción de la factura -->
  {{if isset($Descripcion)}}
  <div>{{$Descripcion}}</div><br/>
  {{/if}}
  
  <p></p>
  <p></p>
    <p></p>
  <p></p>
  <p></p>
  <p></p>
    <p></p>
  <p></p>  

	<!-- Lista de Items -->
	<table style="width:100%" class="detalle">
	  <thead>
    <tr>
      <td colspan="{{$Cols}}" style="border-bottom: solid 0.2mm #000;"></td>
    </tr>      
	    <tr style="background-color: #EEE;padding:1mm;">
	      <th style="text-align:left;width:{{$DWidth}}%;">Descripción</th>
	      <th>Cantidad</th>
	      <th>Precio/Ud</th>
	      {{if isset($HayDescuento) }}<th>Descuento</th>{{/if}}
	      <th>Base</th>
        {{if isset($RetencionPorLinea) }}<th>Retenci&oacute;n</th>{{/if}}
	      {{if isset($ImpuestosPorLinea) }}<th>Impuesto</th>{{/if}}
{{*     {{if isset($RetencionPorLinea) || isset($ImpuestosPorLinea) }}<th>Total</th>{{/if}} *}}
	    </tr>
    </thead>
    <tr>
      <td colspan="{{$Cols}}" style="border-bottom: solid 0.2mm #000;"></td>
    </tr>
    {{foreach  from=$Items item=l}}
    <tr>
      <td style="text-align:left;width:{{$DWidth}}%;">{{$l.Tipo}} - {{$l.ItemDescription}}</td>
      <td>{{$l.Quantity}}<span style="font-size:80%;">{{$l.UnitOfMeasure_PDF}}</span></td>
      <td>{{$l.UnitPriceWithoutTax}} </td>
      {{if isset($HayDescuento) }}<td>{{if $l.DiscountAmount>0}} -{{$l.DiscountAmount}} {{/if}}</td>{{/if}}
      <td>{{$l.GrossAmount}} </td>
      {{if isset($RetencionPorLinea) }}<td>{{if $l.retencion.TaxRate>0}} -{{$l.retencion.TaxRate}}% {{/if}}</td>{{/if}}
      {{if isset($ImpuestosPorLinea) }}<td>{{$l.TaxTypeName}} {{$l.TaxRate}}%</td>{{/if}}
{{*   {{if isset($RetencionPorLinea) || isset($ImpuestosPorLinea) }}<td>{{$l.GrossAmount}} </td>{{/if}}   *}}
    </tr>
    
      <tr><td colspan="{{$Cols}}" class="descripcion">
      {{if isset($l.AdditionalLineItemInformation) }} {{$l.AdditionalLineItemInformation|nl2br}} {{/if}}
      </td></tr> 
    
    
    {{/foreach}}
 
    <!-- Totales -->
    <tr>
      <td colspan="{{$Cols}}" style="border-bottom: solid 0.2mm #000;"></td>
    </tr>
    <tr>
      <td colspan="{{if isset($HayDescuento) }} 4 {{else}} 3 {{/if}}" style="text-align: right;font-weight: bold;">Base imponible:</td>
      <td style="text-align: right;font-weight: bold;">{{$i.TotalGrossAmount}} &euro;</td>
    </tr>    
    
    <tr>
      <td colspan="{{$Cols}}">&nbsp;</td>
    </tr>
    
    <!-- Impuestos repercutidos ( IVA y similares ) -->
    {{foreach from=$taxes item=t}}
    <tr>
      <td colspan="{{$Cols-1}}" style="text-align: right;">Total {{$t.TaxTypeName}} ({{$t.TaxRate}}%):</td>
      <td style="text-align: right;"> +{{$t.TaxAmount}} &euro;</td>
    </tr>
    {{/foreach}}
    
    <!-- Impuestos retenidos ( IRPF ) -->
    {{if isset($taxeswithheld)}}
	    {{foreach from=$taxeswithheld item=w}}
	    <tr>
	      <td colspan="{{$Cols-1}}" style="text-align: right;">Total retenci&oacute;n {{$w.TaxTypeName}} ({{$w.TaxRate}}%):</td>
	      <td style="text-align: right;"> -{{$w.TaxAmount}} &euro;</td>
	    </tr>
	    {{/foreach}}
    {{/if}}
    
    <tr>
      <td colspan="{{$Cols}}" style="border-bottom: solid 0.2mm #000;">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="{{$Cols-1}}" style="text-align: right;font-weight: bold;">Total a pagar:</td>
      <td style="text-align: right;font-weight: bold;">{{$i.Total}} &euro;</td>
    </tr>
	</table>
	
	<!-- Condiciones generales -->
	{{if isset($Condiciones)}}
  <br/><div class="note">{{$Condiciones}}</div>
  {{/if}}
  
</page>
