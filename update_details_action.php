<?php
/* Author:  Anthony Guevara
   Date:    April 24, 2014
   Purpose: Update contents of a job.
*/

require "includes/defs.php";
date_default_timezone_set('UTC');

# Get form data
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$location = $_POST['location'];
$salary = $_POST['salary'];

# Perform update with data
update_item($id,$title, $description, $location, $salary);

header("Location: job_details.php?id=$id"); 
exit;
?>


