<?php
/* Author:  Anthony Guevara
   Date:    April 24, 2014
   Purpose: Remove a job.
*/

require '../Smarty/libs/Smarty.class.php';
require "includes/employer_defs.php";
date_default_timezone_set('UTC');

$smarty = new Smarty;
$id = $_GET['id'];
$empID = @$_GET['empID'];

$details = delete_job($id);

if (empty($empID))
  header("Location: view_jobs.php");
else
  header("Location: list_jobs.php?empID=$empID");

exit;
?>
