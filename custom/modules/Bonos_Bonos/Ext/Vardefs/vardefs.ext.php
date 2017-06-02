<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-06-02 12:22:48
$dictionary["Bonos_Bonos"]["fields"]["meetings_bonos_bonos_1"] = array (
  'name' => 'meetings_bonos_bonos_1',
  'type' => 'link',
  'relationship' => 'meetings_bonos_bonos_1',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_MEETINGS_BONOS_BONOS_1_FROM_MEETINGS_TITLE',
  'id_name' => 'meetings_bonos_bonos_1meetings_ida',
);
$dictionary["Bonos_Bonos"]["fields"]["meetings_bonos_bonos_1_name"] = array (
  'name' => 'meetings_bonos_bonos_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MEETINGS_BONOS_BONOS_1_FROM_MEETINGS_TITLE',
  'save' => true,
  'id_name' => 'meetings_bonos_bonos_1meetings_ida',
  'link' => 'meetings_bonos_bonos_1',
  'table' => 'meetings',
  'module' => 'Meetings',
  'rname' => 'name',
);
$dictionary["Bonos_Bonos"]["fields"]["meetings_bonos_bonos_1meetings_ida"] = array (
  'name' => 'meetings_bonos_bonos_1meetings_ida',
  'type' => 'link',
  'relationship' => 'meetings_bonos_bonos_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_MEETINGS_BONOS_BONOS_1_FROM_MEETINGS_TITLE',
);


// created: 2017-06-01 18:29:55
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

?>