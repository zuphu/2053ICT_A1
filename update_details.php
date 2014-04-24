<?php
/* Author:  Anthony Guevara
   Date:    April 24, 2014
   Purpose: Update contents of a job.
*/

require '../Smarty/libs/Smarty.class.php';
require "includes/employer_defs.php";
date_default_timezone_set('UTC');

$smarty = new Smarty;
$id = $_GET['id'];
$details = get_details($id);

$smarty->assign("details", $details);
$smarty->display("update_details.tpl");
?>
