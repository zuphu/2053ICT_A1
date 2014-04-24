{extends file="layout.tpl"}
{block name=title}Create Job{/block}
{block name=content}

<h1>Create Job</h1>

<form method="post" action="create_job_action.php?empID={$empID}">
    <div class="container">
      <div class="row">
        <div class="col-md-4 align-right">Title:</div><div class="col-md-6" style="width: 100%';"><textarea name="title"></textarea></div>
      </div>
      <div class="row">
        <div class="col-md-4 align-right">Description:</div><div class="col-md-6"><textarea name="description"></textarea></div>
      </div>
      <div class="row">
        <div class="col-md-4 align-right">Location:</div><div class="col-md-6"><textarea name="location"></textarea></div>
      </div>
      <div class="row">
        <div class="col-md-4 align-right">Salary:</div><div class="col-md-6"><textarea name="salary"></textarea></div>
      </div>
      <div class="row">
        <div class="col-md-4 align-right"><input type="submit" value="Add Job"></div>
      </div>    
    </div>
</form>
{/block}