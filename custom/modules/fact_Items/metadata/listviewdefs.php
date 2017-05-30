<?php
$module_name = 'fact_Items';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CANTIDAD' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_CANTIDAD',
    'width' => '10%',
  ),
  'PRECIO_UD' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRECIO_UD',
    'currency_format' => true,
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => false,
  ),
  'UNIDAD' => 
  array (
    'width' => '10%',
    'label' => 'LBL_UNIDAD',
    'default' => false,
  ),
  'TIPO' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TIPO',
    'default' => false,
  ),
);
?>
