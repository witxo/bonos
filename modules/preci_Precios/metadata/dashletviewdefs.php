<?php
$dashletData['preci_PreciosDashlet']['searchFields'] = array (
  'profesor' => 
  array (
    'default' => '',
  ),
  'alumno' => 
  array (
    'default' => '',
  ),
);
$dashletData['preci_PreciosDashlet']['columns'] = array (
  'profesor' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROFESOR',
    'width' => '10%',
    'default' => true,
  ),
  'alumno' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ALUMNO',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
