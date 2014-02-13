<?php
$module_name = 'reg_invoices';
$OBJECT_NAME = 'FACT_FACTURAS';
$listViewDefs [$module_name] =
array (
  'REG_INVOICES_TYPE' => array (
    'width' => '3%',
    'label' => 'LBL_TYPE',
    'default' => true,
  ),
  'NUMBER' =>
  array (
    'width' => '1%',
    'label' => 'LBL_NUMERO_LIST',
    'default' => true,
    'related_fields' => array('year'),
    'type' => 'NumFactura',
  ),
  'NAME' =>
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_SALE_NAME',
    'link' => true,
    'default' => true,
  ),
  'AMOUNT' =>
  array (
    'width' => '10%',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'default' => true,
  ),
  'STATE' =>
  array (
    'width' => '10%',
    'label' => 'LBL_ESTADO',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' =>
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
  ),
  'DATE_CLOSED' =>
  array (
    'width' => '10%',
    'label' => 'LBL_FECHA_EMISION',
    'default' => true,
  ),
  'FACT_FACTURAS_TYPE' =>
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'TAX' =>
  array (
    'width' => '10%',
    'label' => 'LBL_IVA',
    'default' => false,
  ),
  'RETENTION' =>
  array (
    'width' => '10%',
    'label' => 'LBL_RETENCION',
    'default' => false,
  ),
  'DISCOUNT' =>
  array (
    'width' => '10%',
    'label' => 'LBL_DESCUENTO',
    'default' => false,
  ),
);
?>
