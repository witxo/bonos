<?php
$module_name = 'fact_Facturas';
$_object_name = 'fact_facturas';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'headerTpl' => 'modules/fact_Facturas/views/detailViewHeader.tpl',
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DELETE',
          2 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_FACTURAE_TITLE}" accesskey="F" class="button" onclick="this.form.action.value=\'XmlView\'; this.form.module.value=\'fact_Facturas\';" name="button" value="{$MOD.LBL_FACTURAE}" type="submit" {if !($fields.numero.value > 0 && $fields.fact_facturas_type.value=="factura")}disabled style="color:#888;"{/if}>',
          ),
          3 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_GET_PDF_TITLE}" accesskey="M" class="button" onclick="this.form.action.value=\'PdfView\'; this.form.module.value=\'fact_Facturas\';" name="button" value="{$MOD.LBL_GET_PDF}" type="submit">',
          ),
          4 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_GET_PDFNF_TITLE}" accesskey="M" class="button" onclick="this.form.action.value=\'PdfNfView\'; this.form.module.value=\'fact_Facturas\';" name="button" value="{$MOD.LBL_GET_PDFNF}" type="submit">',
          ),
          5 => 
          array (
            'customCode' => '<input title="Recibo" accesskey="M" class="button" onclick="this.form.action.value=\'ReciboView\'; this.form.module.value=\'fact_Facturas\';" name="button" value="Recibo" type="submit">',
          ),
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/include/generic/itemUtils.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_SALE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_sale_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'date_closed',
            'label' => 'LBL_FECHA_EMISION',
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'fecha_contable_c',
            'label' => 'LBL_FECHA_CONTABLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'numero',
            'type' => 'NumFactura',
            'label' => 'LBL_NUMERO',
            'displayParams' => 
            array (
              'show_year' => NULL,
            ),
          ),
          1 => 
          array (
            'name' => 'clasificacion_c',
            'studio' => 'visible',
            'label' => 'LBL_CLASIFICACION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'accounts_fact_facturas_name',
          ),
          1 => 
          array (
            'name' => 'tipo_repercutido',
            'label' => 'LBL_TIPO_IMPUESTO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fact_facturas_type',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'repercutido',
            'label' => 'LBL_REPERCUTIDO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'estado',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'retencion',
            'label' => 'LBL_RETENCION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'modo_pago_c',
            'studio' => 'visible',
            'label' => 'LBL_MODO_PAGO',
          ),
          1 => 
          array (
            'name' => 'nrecibo_c',
            'label' => 'LBL_NRECIBO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'ingreso_si_no_c',
            'studio' => 'visible',
            'label' => 'LBL_INGRESO_SI_NO',
          ),
          1 => 
          array (
            'name' => 'gasto_si_no_c',
            'studio' => 'visible',
            'label' => 'LBL_GASTO_SI_NO',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'grupo_c',
            'studio' => 'visible',
            'label' => 'LBL_GRUPO',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'condiciones',
            'label' => 'LBL_CONDICIONES',
          ),
        ),
      ),
    ),
  ),
);
?>
