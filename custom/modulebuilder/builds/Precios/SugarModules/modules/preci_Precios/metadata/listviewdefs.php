<?php
$module_name = 'preci_Precios';
$OBJECT_NAME = 'PRECI_PRECIOS';
$listViewDefs [$module_name] = 
array (
  'PROFESOR' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROFESOR',
    'width' => '10%',
    'default' => true,
  ),
  'ALUMNO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ALUMNO',
    'width' => '10%',
    'default' => true,
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'CURRENCY_SYMBOL' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_CURRENCY_SYMBOL',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_MODIFIED',
    'default' => true,
  ),
  'AMOUNT_USDOLLAR' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_AMOUNT',
    'align' => 'right',
    'default' => false,
    'currency_format' => true,
  ),
);
?>
