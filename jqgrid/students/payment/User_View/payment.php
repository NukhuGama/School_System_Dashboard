<?php
require_once '../../../jq-config.php';
// include the jqGrid Class
require_once ABSPATH . "php/jqGrid.php";
// include the driver class
require_once ABSPATH . "php/jqGridPdo.php";
// Connection to the server
require_once ABSPATH . "php/jqAutocomplete.php";
$conn = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
// Tell the db that we use utf-8
$conn->query("SET NAMES utf8");

// Create the jqGrid instance
$grid = new jqGridRender($conn);
// Write the SQL Query
$grid->SelectCommand = 'SELECT
						`record_payment`.`id_payment`
						, `record_payment`.`id_student`
						, `student`.`name`
						, `student`.`generation`
						, `student`.`major`
						, `student`.`class`
						, `record_payment`.`payment`
						, `record_payment`.`year`
						FROM
						`dashboard`.`record_payment`
						INNER JOIN `dashboard`.`student` 
							ON (`record_payment`.`id_student` = `student`.`id_student`)';
// Set the table to where you add the data
$grid->table = 'record_payment';
$grid->setPrimaryKeyId('id_payment');
$grid->serialKey = false;
// Set output format to json
$grid->dataType = 'json';
$grid->setColModel();
// Let the grid create the model
$Model = array(
	array("name" => "id_payment", "label" => "ID Payment", "autowidth" => true, "hidden" => false, "editable" => false),
	array("name" => "id_student", "label" => "ID Student", "autowidth" => true, "hidden" => false, "editable" => false),
	array("name" => "name", "label" => "Name", "autowidth" => true),
	array("name" => "generation", "label" => "Generation", "autowidth" => true),
	array("name" => "major", "label" => "Major", "autowidth" => true, "stype" => "select", "searchoptions" => array("value" => ":[All];Science:Science;Social:Social")),
	array("name" => "class", "label" => "Class", "autowidth" => true, "stype" => "select", "searchoptions" => array("value" => ":[All];1:1;2:2")),
	array("name" => "payment", "label" => "Payment Status", "autowidth" => true, "stype" => "select", "searchoptions" => array("value" => ":[All];Paid:Padi;Unpaid:Unpaid")),
	array("name" => "year", "label" => "Year", "autowidth" => true),
);
$grid->setColModel($Model);
// Set the url from where we obtain the data
$grid->setUrl('payment.php');
// Set some grid options
$grid->setGridOptions(array(
	"caption" => "GRADUATE PERFORMANCE",
	"rowNum" => 13,
	"rowList" => array(13, 26, 52, 100),
	"height" => 'auto',
	"hoverrows" => true,
	"autowidth" => true,
	"rownumbers" => true,
	"sortname" => "id_payment",
	"sortorder" => "asc",
	"altRows" => true,
	"altclass" => 'myAltRowClass'

));
// The primary key should be entered

// Enable navigator
$grid->navigator = true;
$grid->toolbarfilter = true;


// auto menutup setelah input data baru, edit data
$grid->setNavOptions('add', array("width" => "400", "closeAfterAdd" => true));
$grid->setNavOptions('view', array("width" => "400", "datawidth" => "auto"));
$grid->setNavOptions('edit', array("width" => "400", "closeAfterEdit" => true));

// Enable only deleting
$grid->setNavOptions('navigator', array("excel" => true, "add" => false, "edit" => false, "del" => false, "view" => true, "search" => false));
// Enjoy
$grid->renderGrid('#grid', '#pager', true, null, null, true, true);
$conn = null;
