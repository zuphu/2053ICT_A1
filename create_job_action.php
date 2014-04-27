<?php
/* Author:  Anthony Guevara
   Date:    April 24, 2014
   Purpose: Create a job.
*/

require "includes/employer_defs.php";
date_default_timezone_set('UTC');

$empID = $_GET['empID'];

if ( empty($title = $_POST['title']) )
  $error = "Please enter a title. ";

if ( empty($description = $_POST['description'] ) )
  $error .= "Please enter a description. ";

if ( empty( $location = $_POST['location'] ) )
  $error .= "Please enter a location. ";

if ( empty ( $salary = $_POST['salary'] ) )
  $error .= "Please enter salary. ";
else if ( !is_numeric($salary) || $salary < 0 )
  $error .= "Please enter a valid salary.";

if ( empty($title) || empty($description) || empty($location) || empty($salary) || !is_numeric($salary) || $salary < 0 )
{
  header("Location: create_job.php?empID=$empID&error=$error&title=$title&description=$description&location=$location&salary=$salary");
  exit;
}

# Perform update with data
$rowID = add_job($empID,$title, $description, $location, $salary);

header("Location: list_jobs.php?id=$rowID&empID=$empID"); 
exit;
?>


