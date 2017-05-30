<?php
// created: 2017-05-26 18:24:58
$viewdefs['Bugs']['QuickCreate'] = array (
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
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'DEFAULT' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'priority',
        ),
        1 => 
        array (
          'name' => 'assigned_user_name',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'source',
        ),
        1 => 
        array (
          'name' => 'team_name',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'type',
        ),
        1 => 
        array (
          'name' => 'status',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'product_category',
        ),
        1 => 
        array (
          'name' => 'found_in_release',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'description',
        ),
      ),
    ),
  ),
);