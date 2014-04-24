<?php
/* 
 * Functions for database connectivity. 
 */

require "db_defs.php";

/* Filter jobs based on search critera. */
function filter_jobs($industry, $keywords, $location, $minsalary)
{
  $industry = htmlspecialchars($industry);
  $keywords = htmlspecialchars($keywords);
  $location = htmlspecialchars($location);
  $minsalary = htmlspecialchars($minsalary);
  try
  {
    if ($minsalary == 0.0)
    {
      $minsalary = 0.01;
    }
    
    $db = db_open();

    $sql = "select * from employer inner join job on job.employerid = employer.id where employer.industry like :industry
    and job.location like :location
    and job.salary >= :minsalary
    and job.description || job.title like :keywords;";
    
    $statement = $db->prepare($sql);
    $statement->bindValue(":industry", "%$industry%"); 
    $statement->bindValue(':keywords', "%$keywords%");
    $statement->bindValue(':location', "%$location%");
    $statement->bindValue(':minsalary', "$minsalary");

    $statement->execute();
    $jobs = $statement->fetchAll();
  }
  catch(PDOException $e)
  {
    die("Error: " . $e->getMessage());
  }
  
  return $jobs; 
}

/* List all jobs. */
function list_jobs()
{
  try
  {
    $db = db_open();
    $sql = 'select * from employer,job where job.employerid=employer.id';
    $statement = $db->prepare($sql);
    $statement->execute();
    $jobs = $statement->fetchAll();
  }
  catch(PDOException $e)
  {
    die("Error: " . $e->getMessage());
  }
  
  return $jobs; 
}

/* Updates an item with the given id and additional detail information. */
function update_item($id, $title, $description, $location, $salary)
{
  try
  {
    $db = db_open();
    $sql = "UPDATE job SET title=:title, description=:description, location=:location, salary=:salary WHERE id=:id";
    // print "$sql<br>\n";
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':location', $location);
    $statement->bindValue(':salary', $salary);
    $statement->execute();
    
    } catch (PDOException $e) {
      die("Error: " . $e->getMessage());
    }
}
