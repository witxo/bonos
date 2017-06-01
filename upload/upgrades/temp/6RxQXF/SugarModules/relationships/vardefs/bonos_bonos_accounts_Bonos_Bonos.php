<?php
// created: 2017-06-01 18:19:30
$dictionary["Bonos_Bonos"]["fields"]["bonos_bonos_accounts"] = array (
  'name' => 'bonos_bonos_accounts',
  'type' => 'link',
  'relationship' => 'bonos_bonos_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_BONOS_BONOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'bonos_bonos_accountsaccounts_ida',
);
$dictionary["Bonos_Bonos"]["fields"]["bonos_bonos_accounts_name"] = array (
  'name' => 'bonos_bonos_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BONOS_BONOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'bonos_bonos_accountsaccounts_ida',
  'link' => 'bonos_bonos_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bonos_Bonos"]["fields"]["bonos_bonos_accountsaccounts_ida"] = array (
  'name' => 'bonos_bonos_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'bonos_bonos_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BONOS_BONOS_ACCOUNTS_FROM_BONOS_BONOS_TITLE',
);
