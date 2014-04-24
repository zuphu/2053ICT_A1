<?php
/* 
 * Functinos for employer database connectivity. 
 */

require "db_defs.php";

/* Add a new job to the database. */
function add_job($empID, $title, $description, $location, $salary)
{
  $title = htmlspecialchars($title);
  $description = htmlspecialchars($description);
  $location = htmlspecialchars($location);
  $salary = htmlspecialchars($salary);
  
  try
  {
    $db = db_open();
    $sql = "insert into job values (null, :title, :description, :location, :salary, :empID)";
    $statement = $db->prepare($sql);
    $statement->bindValue(':title', "$title", PDO::PARAM_STR);
    $statement->bindValue(':description', "$description", PDO::PARAM_STR);
    $statement->bindValue(':location', "$location", PDO::PARAM_STR);
    $statement->bindValue(':salary', "$salary", PDO::PARAM_INT);
    $statement->bindValue(':empID', "$empID", PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetch();
  }
  catch(PDOException $e)
  {
    die("Error: " . $e->getMessage());
  }
  
  return $db->lastInsertId();     
}

/* Delete a job. */
function delete_job($id)
{
  try
  {
    $db = db_open();
    $sql = 'delete from job where job.id=:id';
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', "$id", PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetch();
  }
  catch(PDOException $e)
  {
    die("Error: " . $e->getMessage());
  }
  
  return $result; 
}

/* Get all information about a job. */
function get_details($id)
{
  try
  {
    $db = db_open();
    $sql = 'select * from job where job.id=:id';
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', "$id", PDO::PARAM_INT);
    $statement->execute();
    $details = $statement->fetch();
  }
  catch(PDOException $e)
  {
    die("Error: " . $e->getMessage());
  }
  
  return $details; 
}

/* List all details about a particular job. */
function list_details($id)
{
  try
  {
    $db = db_open();
    $sql = 'select * from job where job.id=:id';
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', "$id", PDO::PARAM_INT);
    $statement->execute();
    $details = $statement->fetchAll();
  }
  catch(PDOException $e)
  {
    die("Error: " . $e->getMessage());
  }
  
  return $details; 
}

/* List jobs for specific employer. */
function list_jobs($id)
{
  try
  {
    $db = db_open();
    $sql = 'select * from employer,job where job.employerID=:id and job.employerid=employer.id';
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', "$id", PDO::PARAM_INT);
    $statement->execute();
    $jobs = $statement->fetchAll();
  }
  catch(PDOException $e)
  {
    die("Error: " . $e->getMessage());
  }
  
  return $jobs; 
}

/* List all employers. */
function list_employers()
{
  try
  {
    $db = db_open();
    $sql = 'select * from employer';
    $statement = $db->query($sql);
    $employers = $statement->fetchAll();
  }
  catch(PDOException $e)
  {
    die("Error: " . $e->getMessage());
  }
  
  return $employers;
}
