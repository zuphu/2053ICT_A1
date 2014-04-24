<?php
/* Author:  Anthony Guevara
   Date:    April 24, 2014
   Purpose: Create a job.
*/

require '../Smarty/libs/Smarty.class.php';
require "includes/employer_defs.php";
date_default_timezone_set('UTC');

$smarty = new Smarty;
$empID = $_GET['empID'];

$smarty->assign("empID", $empID);
$smarty->display("create_job.tpl");
?>
