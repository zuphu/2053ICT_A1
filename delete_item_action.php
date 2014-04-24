<?php
/* Author:  Anthony Guevara
   Date:    April 24, 2014
   Purpose: Remove a job.
*/

require "includes/defs.php";
date_default_timezone_set('UTC');

$id = $_GET['id'];
$empID = $_GET['empID'];
delete_item($id);

header("Location: item_list.php?id=$id");
exit;
?>
