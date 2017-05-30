<?php 
 //WARNING: The contents of this file are auto-generated


/*********************************************************************************
 * 
 * Copyright (C) 2008 Rodrigo Saiz Camarero (http://www.regoluna.com)
 *
 * This file is part of "Regoluna® Spanish Invoices" module.
 *
 * "Regoluna® Spanish Invoices" is free software: you can redistribute it and/or 
 * modify it under the terms of the GNU Lesser General Public License as published 
 * by the Free Software Foundation, version 3 of the License.
 *   
 ********************************************************************************/

//$app_list_strings['moduleList']['fact_Productos'] = 'Productos';
$app_list_strings['moduleList']['fact_Facturas'] = 'Invoices';
$app_list_strings['moduleList']['fact_Items'] = 'Items';

$app_list_strings['producto_tipo_list']=array(
  'Service' => 'Service',
  'Product' => 'Product',
);

// Desplegables para el módulo de Facturas
$app_list_strings['facturas_estado_list']=array(
  'elaborando' =>'Draft',
  'esperando' => 'Waiting for approval',
  'emitida' => 'Emitted',
  'cobrada' => 'Paid',
);

$app_list_strings['fact_facturas_type_dom']['factura'] ='Invoice';
$app_list_strings['fact_facturas_type_dom']['presupuesto'] ='Quote';
$app_list_strings['fact_facturas_type_dom']['proforma'] ='Proforma';

// Textos para creación rápida de Items en Facturas
$app_strings['LBL_NEW_ITEM_BUTTON']="New Item";

// Desplegables para impuestos
$app_list_strings['iva_type_dom']=array(
  '0' =>'',
  '0.16' =>'+16% IVA General',
  '0.07' =>'+7% IVA Reducido',
  '0.04' =>'+4% IVA Superreducido',
);

// Desplegables para impuestos
$app_list_strings['irpf_type_dom']=array(
  '0' =>'',
  '0.15' =>'-15% IRPF',
  '0.07' =>'-7% IRPF',
);

// Invoice items unit types
$app_list_strings['item_unit_dom']=array(
  '01' => 'Unidades',
  '02' => 'Horas-HUR',
  '03' => 'Kilogramos-KGM',
  '04' => 'Litros-LTR',
  '05' => 'Otros',
  '06' => 'Cajas-BX',
  '07' => 'Bandejas-DS',
  '08' => 'Barriles-BA',
  '09' => 'Bidones-JY',
  '10' => 'Bolsas-BG',
  '11' => 'Bombonas-CO',
  '12' => 'Botellas-BO',
  '13' => 'Botes-CI',
  '14' => 'Tetra Briks',
  '15' => 'Centilitros-CLT',
  '16' => 'Centímetros-CMT',
  '17' => 'Cubos-BI',
  '18' => 'Docenas',
  '19' => 'Estuches-CS',
  '20' => 'Garrafas-DJ',
  '21' => 'Gramos-GRM',
  '22' => 'Kilómetros-KMT',
  '23' => 'Latas-CA',
  '24' => 'Manojos-BH',
  '25' => 'Metros-MTR',
  '26' => 'Milímetros-MMT',
  '27' => '6-Packs',
  '28' => 'Paquetes-PK',
  '29' => 'Raciones',
  '30' => 'Rollos-RO',
  '31' => 'Sobres-EN',
  '32' => 'Tarrinas-TB',
  '33' => 'Metro cúbico-MTQ',
  '34' => 'Segundo-SEC',
  '35' => 'Vatio-WTT',
);

// Tax Types (Spanish Facturae)
$app_list_strings['tipo_impuesto_dom']=array(
  '01' => 'IVA',
  '04' => 'IRPF',
  '02' => 'IPSI',
  '03' => 'IGIC',
  '06' => 'ITPAJD',
  '07' => 'IE',
  '08' => 'Ra',
  '09' => 'IGTECM',
  '10' => 'IECDPCAC',
  '11' => 'IIIMAB',
  '12' => 'ICIO',
  '13' => 'IMVDN',
  '14' => 'IMSN',
  '15' => 'IMGSN',
  '16' => 'IMPN',
  '05' => 'Other',
);

// Añadimos una opción para el enlace de Facturas con Notas
$app_list_strings['record_type_display_notes']['fact_Facturas'] = 'Invoice';
 
$app_list_strings['account_type_dom'] = array (
  '' => '',
  'Customer' => 'Customer',
  'Other' => 'Other',
  'Student' => 'Alumno',
  'Alumno_Curso' => 'Alumno de Curso',
  'Teacher' => 'Profesor',
  'Vendor' => 'Proveedor',
  'Moebius' => 'Moebius',
  'Antiguo' => 'Profesor Antiguo',
  'Activo' => 'Alumno Activo',
  'Grupo' => 'Grupo',
);$app_list_strings['recibosino_list'] = array (
  'Si' => 'Si',
  'No' => 'No',
);$app_list_strings['grupo_list'] = array (
  'mobius' => 'Mobius',
  'ivema' => 'Ivema',
  'centro' => 'Centro',
  'lacoja' => 'La Coja',
);$app_list_strings['fact_facturas_type_dom'] = array (
  'factura' => 'Invoice',
  'presupuesto' => 'Quote',
  'factura proveedor' => 'Factura de Proveedor',
  'nomina' => 'Nomina',
  'recibo' => 'Recibo',
  'recibo proveedor' => 'Recibo de Proveedor',
  'correccion' => 'Correccion Nomina',
);$app_list_strings['facturas_estado_list'] = array (
  'elaborando' => 'Draft',
  'esperando' => 'Waiting for approval',
  'emitida' => 'Emitted',
  'pagada' => 'Pagada',
);$app_list_strings['clasificacion_list'] = array (
  'alquiler' => 'Alquiler',
  'mantenimiento' => 'Mantenimiento (Agua, Luz)',
  'material' => 'Material',
  'comida' => 'Comida',
  'sueldos' => 'Sueldos',
  'transporte' => 'Transporte',
  'informatica' => 'Informática',
  'impuestos' => 'Impuestos',
  'otros' => 'Otros',
  'publicidad' => 'Publicidad',
  'local' => 'Local',
  'clases' => 'Clases o cursos',
  'aloha' => 'Aloha',
  'prl' => 'PRL',
  'base' => 'Base',
  'toner' => 'Toner',
  'moebius' => 'Moebius',
  'gestoria' => 'gestoria',
  'bancos' => 'bancos',
  'impresora' => 'impresora',
);$app_list_strings['gasto_si_no_list'] = array (
  'Si' => 'Si',
  'No' => 'No',
);$app_list_strings['modo_pago_list'] = array (
  'contado' => 'Contado',
  'tarjeta' => 'Tarjeta',
  'domiciliacion' => 'Domiciliación',
  'otros' => 'Otros',
  'caixa' => 'Banco Caixa',
  'ipar' => 'Banco Iparkutxa',
  'tar_caixa' => 'Tarjeta Caixa',
  'tar_ipar' => 'Tarjeta Iparkutxa',
);$app_list_strings['producto_tipo_list'] = array (
  'apoyo' => 'Clases de apoyo',
  'curso' => 'Curso',
  'tecnico' => 'Servicio Técnico',
  'informatica' => 'Informática',
  '' => '',
  'prl' => 'PRL',
);

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/


$app_list_strings['moduleList']['preci_Precios'] = 'Precios';
$app_list_strings['preci_precios_type_dom'][''] = '';
$app_list_strings['preci_precios_type_dom']['Existing Business'] = 'Existing Business';
$app_list_strings['preci_precios_type_dom']['New Business'] = 'New Business';

 
$app_list_strings['moduleList']['KReports'] = 'KReports v4.0';

$app_list_strings['kreportstatus'] = array(
	'1' => 'draft',
	'2' => 'limited release',
	'3' => 'general release'
);

$app_strings['LBL_KREPORTS_PRESENTATION_DASHLET'] = 'KReporter Presentation Dashlet';
$app_strings['LBL_KREPORTS_PRESENTATION_DESC'] = 'Displays the Presentation view of a Report';

$app_strings['LBL_KREPORTS_VISUALIZATION_DASHLET'] = 'KReporter Visualization Dashlet';
$app_strings['LBL_KREPORTS_VISUALIZATION_DESC'] = 'Displays the Visualization view of a Report';

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/


$app_list_strings['moduleList']['CON_Contratos'] = 'Contratos';
$app_list_strings['con_contratos_type_dom']['Administration'] = 'Administration';
$app_list_strings['con_contratos_type_dom']['Product'] = 'Product';
$app_list_strings['con_contratos_type_dom']['User'] = 'User';
$app_list_strings['con_contratos_status_dom']['New'] = 'New';
$app_list_strings['con_contratos_status_dom']['Assigned'] = 'Assigned';
$app_list_strings['con_contratos_status_dom']['Closed'] = 'Closed';
$app_list_strings['con_contratos_status_dom']['Pending Input'] = 'Pending Input';
$app_list_strings['con_contratos_status_dom']['Rejected'] = 'Rejected';
$app_list_strings['con_contratos_status_dom']['Duplicate'] = 'Duplicate';
$app_list_strings['con_contratos_priority_dom']['P1'] = 'High';
$app_list_strings['con_contratos_priority_dom']['P2'] = 'Medium';
$app_list_strings['con_contratos_priority_dom']['P3'] = 'Low';
$app_list_strings['con_contratos_resolution_dom'][''] = '';
$app_list_strings['con_contratos_resolution_dom']['Accepted'] = 'Accepted';
$app_list_strings['con_contratos_resolution_dom']['Duplicate'] = 'Duplicate';
$app_list_strings['con_contratos_resolution_dom']['Closed'] = 'Closed';
$app_list_strings['con_contratos_resolution_dom']['Out of Date'] = 'Out of Date';
$app_list_strings['con_contratos_resolution_dom']['Invalid'] = 'Invalid';
$app_list_strings['accion_list']['Alta'] = 'Alta';
$app_list_strings['accion_list']['Baja'] = 'Baja';
$app_list_strings['accion_list']['Modificacion'] = 'Modificacion';
$app_list_strings['tipo_contrato_list']['Indefinido'] = 'Indefinido';
$app_list_strings['tipo_contrato_list']['Temporal'] = 'Temporal';
$app_list_strings['tipo_contrato_list']['Obra'] = 'Obra';
$app_list_strings['tipo_contrato_list'][''] = '';
$app_list_strings['categoria_list']['Profesor'] = 'Profesor';
$app_list_strings['categoria_list']['Administrativo'] = 'Administrativo';
$app_list_strings['categoria_list'][''] = '';


/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/


$app_list_strings['moduleList']['Bonos_Bonos'] = 'Bonos';

?>