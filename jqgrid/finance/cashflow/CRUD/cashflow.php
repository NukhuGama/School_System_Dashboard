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
$grid->SelectCommand = 'SELECT
							`id_cashflow`
							, `month`
							, `income`
							, `outcome`
							, `input_date`
						FROM
							`dashboard`.`finance_cashflow`';
// Set the table to where you add the data
$grid->table = 'finance_cashflow';
$grid->setPrimaryKeyId('id_cashflow');
$grid->serialKey = false;
// Set output format to json
$grid->dataType = 'json';
// Let the grid create the model
$Model = array(
	array("name" => "id_cashflow", "label" => "ID", "width" => 10, "hidden" => true),
	array("name" => "month", "label" => "Month", "autowidth" => true),
	array(
		"name" => "income", "autowidth" => true, "label" => "Income",
		"formatter" => "currency",
		"formatoptions" => array("decimalPlaces" => 2, "thousandsSeparator" => ",", "prefix" => "Rp ", "suffix" => ""), "sorttype" => "currency"
	),
	array(
		"name" => "outcome", "autowidth" => true, "label" => "Outcome",
		"formatter" => "currency",
		"formatoptions" => array("decimalPlaces" => 2, "thousandsSeparator" => ",", "prefix" => "Rp ", "suffix" => ""), "sorttype" => "currency"
	),
	array("name" => "input_date", "label" => "Input Date", "autowidth" => true)
);
$grid->setColModel($Model);
// Set the url from where we obtain the data
$grid->setUrl('cashflow.php');
// Set some grid options
$grid->setGridOptions(array(
	"caption" => "CASHFLOW",
	"rowNum" => 10,
	"rowList" => array(10, 20, 30, 50, 100),
	"height" => 'auto',
	"hoverrows" => true,
	"autowidth" => true,
	"rownumbers" => true,
	"sortname" => "id_cashflow",
	"sortorder" => "asc",
	"altRows" => true,
	"altclass" => 'myAltRowClass'

));
// The primary key should be entered
$grid->setColProperty('id_cashflow', array("editrules" => array("required" => false)));
$grid->setColProperty('month', array('edittype' => 'select', 'editoptions' => array('dataUrl' => 'month.html')));

$grid->setDbDate('Y-m-d');
$grid->setDbTime('Y-m-d H:i:s');
$grid->setUserDate('Y-m-d');
$grid->setUserTime('Y-m-d');

$grid->setColProperty(
	'input_date',
	array(
		"formoptions" => array("label" => "input_date"), "editable" => true, "formatter" => "date", "datefmt" => 'Y/m/d', "formatoptions" => array("srcformat" => "Y-m-d H:i:s", "newformat" => "Y-m-d"),
		"editrules" => array("edithidden" => true, "required" => true, "readonly" => false),
		"editoptions" => array("tabindex" => 7, "required" => true, "readonly" => false, "dataInit" =>
		"js:function(elm){setTimeout(function(){
                          jQuery(elm).datepicker({dateFormat:'yy-m-d'});
                             jQuery('.ui-datepicker').css({'zIndex':'1200','font-size':'75%'});},100);}")
	)
);

// Enable navigator
//$grid->toolbarfilter = true;
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
