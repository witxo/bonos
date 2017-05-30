<?php
// created: 2017-05-26 18:24:58
$viewdefs['Bugs']['EditView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'hidden' => 
      array (
        0 => '<input type="hidden" name="account_id" value="{$smarty.request.account_id}">',
        1 => '<input type="hidden" name="contact_id" value="{$smarty.request.contact_id}">',
      ),
    ),
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
      'LBL_BUG_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_bug_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'bug_number',
          'type' => 'readonly',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'size' => 60,
            'required' => true,
          ),
        ),
      ),
      2 => 
      array (
        0 => 'priority',
        1 => 'type',
      ),
      3 => 
      array (
        0 => 'source',
        1 => 'status',
      ),
      4 => 
      array (
        0 => 'product_category',
        1 => 'resolution',
      ),
      5 => 
      array (
        0 => 'found_in_release',
        1 => 'fixed_in_release',
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'nl2br' => true,
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'work_log',
          'nl2br' => true,
        ),
      ),
    ),
    'LBL_PANEL_ASSIGNMENT' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
      ),
    ),
  ),
);