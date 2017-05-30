<?php
// created: 2017-05-26 18:24:58
$viewdefs['Cases']['QuickCreate'] = array (
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
    'tabDefs' => 
    array (
      1 => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      2 => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      3 => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'name' => 'name',
        'displayParams' => 
        array (
          'size' => 65,
          'required' => true,
        ),
      ),
      1 => 'priority',
    ),
    1 => 
    array (
      0 => 'status',
      1 => 
      array (
        'name' => 'account_name',
      ),
    ),
    2 => 
    array (
      0 => 'assigned_user_name',
    ),
    3 => 
    array (
      0 => 
      array (
        'name' => 'description',
        'displayParams' => 
        array (
          'rows' => '4',
          'cols' => '60',
        ),
        'nl2br' => true,
      ),
    ),
  ),
);