{extends file="layout.tpl"}
{block name=title}Index{/block}
{block name=content}
<a class="ax" href="view_jobs.php">View All Jobs</a>
<br/><br/>
OR
<br/>
<h3>Search By Critera</h3>

<form name="Search" action="view_jobs.php" method="get">
  <div class="container">
    <div class="row">
      <div class="col-md-4 align-right">Industry:</div><div class="col-md-6"><input type="text" name="industry"></div>
    </div>
    <div class="row">
      <div class="col-md-4 align-right">Key Word:</div><div class="col-md-6"><input type="text" name="keywords"></div>
    </div>
    <div class="row">
      <div class="col-md-4 align-right">Location:</div><div class="col-md-6"><input type="text" name="location"></div>
    </div>
    <div class="row">
      <div class="col-md-4 align-right">Minimum Salary:</div><div class="col-md-6"><input type="text" name="minsalary"></div>
    </div>
    <div class="row">      
      <div class="col-md-4 align-right"><input type="submit" style="float:right;" value="Search"></div><div class="col-md-6"></div>
    </div>
  </div>
</form>
  
{/block}
