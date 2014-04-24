<?php
/* Author:  Anthony Guevara
   Date:    April 24, 2014
   Purpose: List all jobs specific to employer.
*/

require '../Smarty/libs/Smarty.class.php';
require "includes/employer_defs.php";
date_default_timezone_set('UTC');

$smarty = new Smarty;
$empID = @$_GET['empID'];
$jobs = list_jobs($empID);

$smarty->assign("empID", $empID);
$smarty->assign("jobs", $jobs);
$smarty->display("list_jobs.tpl");
?>
