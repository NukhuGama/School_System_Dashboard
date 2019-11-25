<?php
require_once '../../../jq-config.php';
// include the jqGrid Class
require_once ABSPATH . "php/jqGrid.php";
// include the driver class
require_once ABSPATH . "php/jqGridPdo.php";
// Connection to the server
$conn = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
// Tell the db that we use utf-8
$conn->query("SET NAMES utf8");

// Create the jqGrid instance
$grid = new jqGridRender($conn);
// Write the SQL Query
$grid->SelectCommand = 'SELECT id_asset, description, description, value FROM finance_asset';
// Set the table to where you add the data
$grid->table = 'finance_asset';
$grid->setPrimaryKeyId('id_asset');
$grid->serialKey = false;
// Set output format to json
$grid->dataType = 'json';
// Let the grid create the model
$Model = array(
	array("name" => "id_asset", "label" => "ID", "autowidth" => true, "hidden" => true),
	array("name" => "description", "label" => "Name", "autowidth" => true),
	array("name" => "value", "label" => "Value", "autowidth" => true)
);
$grid->setColModel($Model);
// Set the url from where we obtain the data
$grid->setUrl('assets.php');
// Set some grid options
$grid->setGridOptions(array(
	"caption" => "STAFF ASSETS STATUS",
	"rowNum" => 10,
	"rowList" => array(10, 20, 30, 50, 100),
	"height" => 'auto',
	"hoverrows" => true,
	"autowidth" => true,
	"rownumbers" => true,
	"sortname" => "id_asset",
	"sortorder" => "asc",
	"altRows" => true,
	"altclass" => 'myAltRowClass'

));
// The primary key should be entered
$grid->setColProperty('id_asset', array("editrules" => array("required" => false)));

// Enable navigator
$grid->navigator = true;
// auto menutup setelah input data baru, edit data
$grid->setNavOptions('add', array("width" => "400", "closeAfterAdd" => true));
$grid->setNavOptions('view', array("width" => "400", "datawidth" => "auto"));
$grid->setNavOptions('edit', array("width" => "400", "closeAfterEdit" => true));
// Enable only deleting
$grid->setNavOptions('navigator', array("excel" => false, "add" => true, "edit" => true, "del" => true, "view" => false, "search" => false));
// Enjoy
$grid->renderGrid('#grid', '#pager', true, null, null, true, true);
$conn = null;
