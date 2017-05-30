<?php
 // created: 2016-09-21 22:40:41
$layout_defs["Accounts"]["subpanel_setup"]['con_contratos_accounts'] = array (
  'order' => 100,
  'module' => 'CON_Contratos',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CON_CONTRATOS_ACCOUNTS_FROM_CON_CONTRATOS_TITLE',
  'get_subpanel_data' => 'con_contratos_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
