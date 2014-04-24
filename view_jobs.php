<?php
/* Author:  Anthony Guevara
   Date:    April 24, 2014
   Purpose: List jobs based on filter or no filter.
*/

require '../Smarty/libs/Smarty.class.php';
require "includes/defs.php";
date_default_timezone_set('UTC');

$industry  = @$_GET['industry'];
$keywords  = @$_GET['keywords'];
$location  = @$_GET['location'];
$minsalary = @$_GET['minsalary'];


if ( $industry != NULL || $keywords != NULL || $location != NULL || $minsalary != NULL )
  $jobs = filter_jobs($industry, $keywords, $location, $minsalary);
else
  $jobs = list_jobs($industry, $keywords, $location, $minsalary);

$smarty = new Smarty;
$smarty->assign("jobs", $jobs);
$smarty->display("view_jobs.tpl");
?>
