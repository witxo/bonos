<?php
$module_name = 'preci_Precios';
$_module_name = 'preci_precios';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'profesor' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PROFESOR',
        'width' => '10%',
        'default' => true,
        'name' => 'profesor',
      ),
      'alumno' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ALUMNO',
        'width' => '10%',
        'default' => true,
        'name' => 'alumno',
      ),
    ),
    'advanced_search' => 
    array (
      'profesor' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PROFESOR',
        'width' => '10%',
        'default' => true,
        'name' => 'profesor',
      ),
      'alumno' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ALUMNO',
        'width' => '10%',
        'default' => true,
        'name' => 'alumno',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
