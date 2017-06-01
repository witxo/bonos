<?php
$module_name = 'Bonos_Bonos';
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
            'name' => 'numerobono',
            'label' => 'LBL_NUMEROBONO',
          ),
          1 => 
          array (
            'name' => 'bonos_bonos_accounts_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'precio',
            'label' => 'LBL_PRECIO',
          ),
          1 => 
          array (
            'name' => 'fechacaducidad',
            'label' => 'LBL_FECHACADUCIDAD',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'inactivo',
            'label' => 'LBL_INACTIVO',
          ),
          1 => 
          array (
            'name' => 'repeticiones',
            'label' => 'LBL_REPETICIONES',
          ),
        ),
      ),
    ),
  ),
);
?>
