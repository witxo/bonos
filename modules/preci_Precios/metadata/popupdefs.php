<?php
$popupMeta = array (
    'moduleMain' => 'preci_Precios',
    'varName' => 'preci_Precios',
    'orderBy' => 'preci_precios.name',
    'whereClauses' => array (
  'profesor' => 'preci_precios.profesor',
  'alumno' => 'preci_precios.alumno',
),
    'searchInputs' => array (
  1 => 'profesor',
  2 => 'alumno',
),
    'searchdefs' => array (
  'profesor' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROFESOR',
    'width' => '10%',
    'name' => 'profesor',
  ),
  'alumno' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ALUMNO',
    'width' => '10%',
    'name' => 'alumno',
  ),
),
    'listviewdefs' => array (
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
),
);
