<?php
/* 
 * Database access functions. 
 */

function db_open()
{
  try {
    $db = new PDO('sqlite:db/databaseasg1');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Error: " . $e->getMessage());
  }
  return $db;
}

?>
