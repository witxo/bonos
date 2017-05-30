<?php
$searchdefs ['Accounts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'cif_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CIF',
        'width' => '10%',
        'name' => 'cif_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'alumno_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ALUMNO',
        'width' => '10%',
        'name' => 'alumno_c',
      ),
      'cif_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CIF',
        'width' => '10%',
        'name' => 'cif_c',
      ),
      'colegio_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_COLEGIO',
        'width' => '10%',
        'name' => 'colegio_c',
      ),
      'curso_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CURSO',
        'width' => '10%',
        'name' => 'curso_c',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_street' => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_state' => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_postalcode' => 
      array (
        'name' => 'address_postalcode',
        'label' => 'LBL_POSTAL_CODE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'account_type' => 
      array (
        'name' => 'account_type',
        'default' => true,
        'width' => '10%',
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
