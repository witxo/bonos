<?php
// created: 2017-05-26 18:24:58
$viewdefs['preci_Precios']['EditView'] = array (
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
    'javascript' => '{$PROBABILITY_SCRIPT}',
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_SALE_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_sale_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'profesor',
          'studio' => 'visible',
          'label' => 'LBL_PROFESOR',
        ),
        1 => 
        array (
          'name' => 'alumno',
          'studio' => 'visible',
          'label' => 'LBL_ALUMNO',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'amount',
          'comment' => 'Unconverted amount of the sale',
          'label' => 'LBL_AMOUNT',
        ),
        1 => 
        array (
          'name' => 'currency_id',
          'comment' => 'Currency used for display purposes',
          'label' => 'LBL_CURRENCY',
        ),
      ),
    ),
  ),
);