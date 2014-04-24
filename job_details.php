<?php
/* Author:  Anthony Guevara
   Date:    April 24, 2014
   Purpose: Get all details concerning a specific job.
*/

require '../Smarty/libs/Smarty.class.php';
require "includes/employer_defs.php";
date_default_timezone_set('UTC');

$id = $_GET['id'];
$empID = @$_GET['empID'];
$smarty = new Smarty;

$details = list_details($id);

$smarty->assign("empID", $empID);
$smarty->assign("details", $details);
$smarty->display("job_details.tpl");
?>
