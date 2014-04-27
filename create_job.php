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
$error = @$_GET['error'];
$title = @$_GET['title'];
$description = @$_GET['description'];
$location = @$_GET['location'];
$salary = @$_GET['salary'];

$smarty->assign("empID", $empID);
$smarty->assign("title", $title);
$smarty->assign("description", $description);
$smarty->assign("location", $location);
$smarty->assign("salary", $salary);
$smarty->assign("error", $error);
$smarty->display("create_job.tpl");
?>
