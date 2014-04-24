<?php
/* Author:  Anthony Guevara
   Date:    April 24, 2014
   Purpose: Landing page
*/

require '../Smarty/libs/Smarty.class.php';
date_default_timezone_set('UTC');

$smarty = new Smarty;
$smarty->display("index.tpl");
?>
