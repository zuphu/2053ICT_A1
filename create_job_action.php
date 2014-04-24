<?php
/* Author:  Anthony Guevara
   Date:    April 24, 2014
   Purpose: Create a job.
*/

require "includes/employer_defs.php";
date_default_timezone_set('UTC');

# Get form data
$empID = $_GET['empID'];
$title = $_POST['title'];
$description = $_POST['description'];
$location = $_POST['location'];
$salary = $_POST['salary'];

# Perform update with data
$rowid = add_job($empID,$title, $description, $location, $salary);

header("Location: job_details.php?id=$rowid&empID=$empID"); 
exit;
?>


