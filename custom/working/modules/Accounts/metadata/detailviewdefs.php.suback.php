<?php
// created: 2015-10-27 11:23:18
$viewdefs = array (
  'Accounts' => 
  array (
    'DetailView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'buttons' => 
          array (
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
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
        'includes' => 
        array (
          0 => 
          array (
            'file' => 'modules/Accounts/Account.js',
          ),
        ),
        'useTabs' => false,
        'tabDefs' => 
        array (
          'LBL_ACCOUNT_INFORMATION' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_DETAILVIEW_PANEL1' => 
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
        'lbl_account_information' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'comment' => 'Name of the Company',
              'label' => 'LBL_NAME',
              'displayParams' => 
              array (
              ),
            ),
            1 => 
            array (
              'name' => 'phone_office',
              'comment' => 'The office phone number',
              'label' => 'LBL_PHONE_OFFICE',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'website',
              'type' => 'link',
              'label' => 'LBL_WEBSITE',
              'displayParams' => 
              array (
                'link_target' => '_blank',
              ),
            ),
            1 => 
            array (
              'name' => 'account_type',
              'comment' => 'The Company is of this type',
              'label' => 'LBL_TYPE',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'billing_address_street',
              'label' => 'LBL_BILLING_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'billing',
              ),
            ),
            1 => 
            array (
              'name' => 'shipping_address_street',
              'label' => 'LBL_SHIPPING_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'shipping',
              ),
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'email1',
              'studio' => 'false',
              'label' => 'LBL_EMAIL',
            ),
            1 => 
            array (
              'name' => 'cif_c',
              'label' => 'LBL_CIF',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
            1 => 
            array (
              'name' => 'curso_c',
              'label' => 'LBL_CURSO',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'colegio_c',
              'label' => 'LBL_COLEGIO',
            ),
            1 => 
            array (
              'name' => 'asignaturas_c',
              'studio' => 'visible',
              'label' => 'LBL_ASIGNATURAS',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'alumno_c',
              'label' => 'LBL_ALUMNO',
            ),
            1 => 
            array (
              'name' => 'grupo_c',
              'studio' => 'visible',
              'label' => 'LBL_GRUPO',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'accounts_accounts_1_name',
            ),
          ),
        ),
        'lbl_detailview_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'recibosino_c',
              'studio' => 'visible',
              'label' => 'LBL_RECIBOSINO',
            ),
            1 => 
            array (
              'name' => 'descripcion_recibo_c',
              'studio' => 'visible',
              'label' => 'LBL_DESCRIPCION_RECIBO',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'cantidad_recibo_c',
              'label' => 'LBL_CANTIDAD_RECIBO',
            ),
            1 => '',
          ),
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
            1 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'date_entered',
              'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            ),
          ),
        ),
      ),
    ),
  ),
);