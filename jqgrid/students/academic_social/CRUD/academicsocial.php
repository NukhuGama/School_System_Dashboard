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
  `record_score`.id_score id,
  `student`.`id_student`,
  `subject`.`id_subject`,
  `student`.`name` names,
  `student`.`generation`,
  `student`.`class`,
  `student`.`major` smajor,
  `subject`.`name`,
  `subject`.`major`,
  `record_score`.`score`,
  `record_score`.`year`
FROM
  `record_score`
  INNER JOIN `subject`
    ON (
      `record_score`.`id_subject` = `subject`.`id_subject`
    )
  INNER JOIN `student`
    ON (
      `student`.`id_student` = `record_score`.`id_student`
    )
    WHERE
   `student`.`major` = "Social"
    ';
// Set the table to where you add the data
$grid->table = 'record_score';
$grid->setPrimaryKeyId('id_score');
$grid->serialKey = false;
// Set output format to json
$grid->dataType = 'json';
$grid->setColModel();
// Let the grid create the model
$Model = array(
  array("name" => "id_student", "label" => "ID", "autowidth" => true),
  array("name" => "id", "label" => "ID", "autowidth" => true, "hidden" => true),
  array("name" => "id_subject", "label" => "SUBJECT ID", "hidden" => true),
  array("name" => "names", "label" => "Name", "autowidth" => true),
  array("name" => "generation", "label" => "Generation", "autowidth" => true, "editoptions" => array("readonly" => "readonly")),
  array("name" => "class", "label" => "Class", "autowidth" => true, "editoptions" => array("readonly" => "readonly")),

  array("name" => "name", "label" => "Subject", "autowidth" => true, "stype" => "select", "searchoptions" => array("value" => ":[All];Arts:Arts;Economics:Economics;English:English;Geography:Geography;Indonesian Language:Indonesian Language;Math:Math;Sociology:Sociology")),

  array("name" => "smajor", "label" => "Major", "autowidth" => true, "hidden" => true),

  array("name" => "score", "label" => "Score", "autowidth" => true),
  array("name" => "year", "label" => "Year", "autowidth" => true),

);
$grid->setColModel($Model);
// Set the url from where we obtain the data
$grid->setUrl('academicsocial.php');
// Set some grid options
$grid->setGridOptions(array(
  "caption" => "SOSIAL MAJOR ACADEMIC PERFORMANCE",
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
$grid->setColProperty('major', array("editoptions" => array("readonly" => "readonly")));
$grid->setColProperty('id_student', array("editoptions" => array("readonly" => "readonly")));
$grid->setColProperty('id_subject', array("editoptions" => array("readonly" => "readonly")));
$grid->setColProperty('year', array('edittype' => 'select', 'editoptions' => array('dataUrl' => 'selection/year.html')));

$grid->setAutocomplete("names", "#id_student", "SELECT name, name, id_student FROM student WHERE name LIKE ? AND student.major='Social' ORDER BY name", null, true, false);

//$grid->setAutocomplete("name","#major","SELECT name, name, major FROM subject WHERE name LIKE ? ORDER BY name",null,true,false);

$grid->setAutocomplete("name", "#id_subject", "SELECT name, name, id_subject FROM subject WHERE name LIKE ? AND major = 'Social' ORDER BY name", null, true, false);



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
