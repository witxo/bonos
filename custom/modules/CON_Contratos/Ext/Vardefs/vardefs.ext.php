<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2016-09-21 22:40:41
$dictionary["CON_Contratos"]["fields"]["con_contratos_accounts"] = array (
  'name' => 'con_contratos_accounts',
  'type' => 'link',
  'relationship' => 'con_contratos_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_CON_CONTRATOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'con_contratos_accountsaccounts_ida',
);
$dictionary["CON_Contratos"]["fields"]["con_contratos_accounts_name"] = array (
  'name' => 'con_contratos_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CON_CONTRATOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'con_contratos_accountsaccounts_ida',
  'link' => 'con_contratos_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["CON_Contratos"]["fields"]["con_contratos_accountsaccounts_ida"] = array (
  'name' => 'con_contratos_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'con_contratos_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CON_CONTRATOS_ACCOUNTS_FROM_CON_CONTRATOS_TITLE',
);

?>