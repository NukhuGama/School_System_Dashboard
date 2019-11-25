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
							`id_student` id
							, `name`
							, `generation`
							, `major`
							, `class`
							, `gender`
							, `religion`
							, `Race`
							, `status`
							, `occupation`
						FROM
						`dashboard`.`student`
						WHERE
						`status` = "Active"
						';
// Set the table to where you add the data
$grid->table = 'student';
$grid->setPrimaryKeyId('id_student');
$grid->serialKey = false;
// Set output format to json
$grid->dataType = 'json';
$grid->setColModel();
// Let the grid create the model
$Model = array(
	array("name" => "id", "label" => "ID", "autowidth" => true, "hidden" => false, "editable" => false),
	array("name" => "name", "label" => "Name", "autowidth" => true),
	array("name" => "generation", "label" => "Generation", "autowidth" => true),
	array("name" => "major", "label" => "Major", "autowidth" => true, "stype" => "select", "searchoptions" => array("value" => ":[All];Science:Science;Social:Social")),
	array("name" => "class", "label" => "Class", "autowidth" => true),
	array("name" => "gender", "label" => "Gender", "autowidth" => true, "stype" => "select", "searchoptions" => array("value" => ":[All];Female:Female;Male:Male")),
	array("name" => "religion", "label" => "Religion", "autowidth" => true, "stype" => "select", "searchoptions" => array("value" => ":[All];Islam:Islam;Christian Protestan:Christian Protestan;Chatolic:Chatolic;Hindu:Hindu;Buddha:Buddha;Kong Hu Cu:Kong Hu Cu")),
	array("name" => "Race", "label" => "Race", "autowidth" => true, "stype" => "select", "searchoptions" => array("value" => ":[All];Indonesian:Indonesian;Foreigner:Foreigner")),
	array("name" => "status", "label" => "Status", "autowidth" => true, "stype" => "select", "searchoptions" => array("value" => ":[All];Active:Active;Dropout:Dropout;Graduate:Graduate"), "hidden" => true, "editable" => true, "editrules" => array("edithidden" => true), "hidedlg" => true),
);
$grid->setColModel($Model);
// Set the url from where we obtain the data
$grid->setUrl('population.php');
// Set some grid options
$grid->setGridOptions(array(
	"caption" => "STUDENTS POPULATION",
	"rowNum" => 13,
	"rowList" => array(13, 26, 52, 100),
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
$grid->setColProperty('major', array('edittype' => 'select', 'editoptions' => array('dataUrl' => 'selection/major.html')));
$grid->setColProperty('gender', array('edittype' => 'select', 'editoptions' => array('dataUrl' => 'selection/gender.html')));
$grid->setColProperty('religion', array('edittype' => 'select', 'editoptions' => array('dataUrl' => 'selection/religion.html')));
$grid->setColProperty('Race', array('edittype' => 'select', 'editoptions' => array('dataUrl' => 'selection/race.html')));
$grid->setColProperty('status', array('edittype' => 'select', 'editoptions' => array('dataUrl' => 'selection/status.html')));

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
$grid->setNavOptions('navigator', array("excel" => true, "add" => true, "edit" => true, "del" => true, "view" => true, "search" => false));
// Enjoy
$grid->renderGrid('#grid', '#pager', true, null, null, true, true);
$conn = null;
