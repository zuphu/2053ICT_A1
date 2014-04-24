<?php
/* Author:  Anthony Guevara
   Date:    April 24, 2014
   Purpose: Employers landing page, allows them to select from list of employers.
*/

require '../Smarty/libs/Smarty.class.php';
require "includes/employer_defs.php";
date_default_timezone_set('UTC');

$smarty = new Smarty;

$employers = list_employers();

$smarty->assign("employers", $employers);
$smarty->display("employers.tpl");
?>
