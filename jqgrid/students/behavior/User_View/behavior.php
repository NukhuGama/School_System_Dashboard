<?php
require_once '../../../jq-config.php';
// include the jqGrid Class
require_once ABSPATH . "php/jqGrid.php";
// include the driver class
require_once ABSPATH . "php/jqGridPdo.php";
// Connection to the server
require_once ABSPATH."php/jqAutocomplete.php";
$conn = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
// Tell the db that we use utf-8
$conn->query("SET NAMES utf8");

// Create the jqGrid instance
$grid = new jqGridRender($conn);
// Write the SQL Query
$grid->SelectCommand = 'SELECT
							`id_suspension` id
							, `offense`
							, `suspension`
							, `year`
							, `student`.`id_student`
							, `student`.`name` sname
						FROM
						`dashboard`.`record_suspension`
						 INNER JOIN student
					    ON (
					      `student`.`id_student` = `record_suspension`.`id_student`
					    )';
// Set the table to where you add the data
$grid->table = 'record_suspension';
$grid->setPrimaryKeyId('id_suspension');
$grid->serialKey = false;
// Set output format to json
$grid->dataType = 'json';
$grid->setColModel();
// Let the grid create the model
$Model = array(
	array("name" => "id_student", "label" => "ID", "autowidth" => true,  "editoptions"=>array("readonly"=>"readonly")),
	array("name" => "sname", "label" => "Offender", "autowidth" => true),
	array("name" => "offense", "label" => "Offense", "autowidth" => true, "stype" => "select", "searchoptions" =>array("value" => ":[All];Fight:Fight;Harrasment:Harrasment;Possession:Possession;Vandalism:Vandalism" )),
	array("name" => "suspension", "label" => "Suspension", "autowidth" => true),
	array("name" => "year", "label" => "Year", "autowidth" => true)
);
$grid->setColModel($Model);
// Set the url from where we obtain the data
$grid->setUrl('behavior.php');
// Set some grid options
$grid->setGridOptions(array(
	"caption" => "BEHAVIOR REPORT",
	"rowNum" => 13,
	"rowList" => array(20, 50, 100),
	"height" => 'auto',
	"hoverrows" => true,
	"autowidth" => true,
	"rownumbers" => true,
	"sortname" => "id",
	"sortorder" => "asc",
	"altRows" => true,
	"altclass" => 'myAltRowClass',
	"multiselect" => true

));
// The primary key should be entered
$grid->setColProperty('id', array("editrules" => array("required" => false)));
$grid->setColProperty('offense', array('edittype' => 'select', 'editoptions' => array('dataUrl' => 'selection/offense.html')));

$grid->setAutocomplete("sname","#id_student","SELECT name, name, id_student FROM student WHERE name LIKE ? ORDER BY name",null,true,false);

// Enable navigator
$grid->navigator = true;
$grid->toolbarfilter = true;

$custom = <<<CUSTOM
jQuery("#getselected").click(function(){
    var selr = jQuery('#grid').jqGrid('getGridParam','selarrrow');
    if(selr) alert(selr);
});
CUSTOM;
$grid->setJSCode($custom);

// auto menutup setelah input data baru, edit data
$grid->setNavOptions('add', array("width" => "400", "closeAfterAdd" => true));
$grid->setNavOptions('view', array("width" => "400", "datawidth" => "auto"));
$grid->setNavOptions('edit', array("width" => "400", "closeAfterEdit" => true));

// Enable only deleting
$grid->setNavOptions('navigator', array("excel" => true, "add" => false, "edit" => false, "del" => false, "view" => true, "search" => false));
// Enjoy
$grid->renderGrid('#grid', '#pager', true, null, null, true, true);
$conn = null;