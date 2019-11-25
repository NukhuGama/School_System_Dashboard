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
							`id_staff` id
							, `name`
							, `gender`
							, `religion`
							, `race`
							, `status`
						FROM
						`dashboard`.`staff`';

// Set the table to where you add the data
$grid->table = 'staff';
$grid->setPrimaryKeyId('id_staff');
$grid->serialKey = false;
// Set output format to json
$grid->dataType = 'json';
$grid->setColModel();
// Let the grid create the model
$Model = array(
	array("name" => "id", "label" => "ID", "width" => "30", "hidden" => false),
	array("name" => "name", "label" => "Name", "autowidth" => true),
	array("name" => "gender", "label" => "Gender", "width" => "50", "stype" => "select", "searchoptions" => array("value" => ":[All];Female:Female;Male:Male")),
	array("name" => "status", "label" => "Status", "width" => "60", "stype" => "select", "searchoptions" => array("value" => ":[All];Full-Time:Full-Time;Part-Time:Part-Time")),
	array("name" => "religion", "label" => "Religion", "width" => "100", "stype" => "select", "searchoptions" => array("value" => ":[All];Islam:Islam;Christian Protestan:Christian Protestan;Chatolic:Chatolic;Hindu:Hindu;Buddha:Buddha;Kong Hu Cu:Kong Hu Cu")),
	array("name" => "race", "label" => "Race", "autowidth" => true, "stype" => "select", "searchoptions" => array("value" => ":[All];Foreigner:Foreigner;Indonesian:Indonesian"))

);
$grid->setColModel($Model);
// Set the url from where we obtain the data
$grid->setUrl('population.php');
// Set some grid options
$grid->setGridOptions(array(
	"caption" => "STAFF POPULATION",
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
$grid->setColProperty('gender', array('edittype' => 'select', 'editoptions' => array('dataUrl' => 'selection/gender.html')));
$grid->setColProperty('status', array('edittype' => 'select', 'editoptions' => array('dataUrl' => 'selection/status.html')));
$grid->setColProperty('religion', array('edittype' => 'select', 'editoptions' => array('dataUrl' => 'selection/religion.html')));
$grid->setColProperty('race', array('edittype' => 'select', 'editoptions' => array('dataUrl' => 'selection/race.html')));

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
