<?php
$module_name = 'CON_Contratos';
$_object_name = 'con_contratos';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accion',
            'studio' => 'visible',
            'label' => 'LBL_ACCION',
          ),
          1 => 
          array (
            'name' => 'tipo',
            'studio' => 'visible',
            'label' => 'LBL_TIPO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_inicio',
            'label' => 'LBL_FECHA_INICIO',
          ),
          1 => 
          array (
            'name' => 'horas',
            'label' => 'LBL_HORAS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'firmado',
            'label' => 'LBL_FIRMADO',
          ),
          1 => 'status',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'escaneado',
            'label' => 'LBL_ESCANEADO',
          ),
          1 => 
          array (
            'name' => 'categoria',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORIA',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'enviado',
            'label' => 'LBL_ENVIADO',
          ),
          1 => 
          array (
            'name' => 'con_contratos_accounts_name',
          ),
        ),
      ),
    ),
  ),
);
?>
