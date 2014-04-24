{extends file="layout.tpl"}
{block name=title}Update Job{/block}
{block name=content}

<h1>Update Job</h1>
<form method="post" action="update_details_action.php">
    <input type="hidden" name="id" value="{$details.id}">
    <div class="container">
      <div class="row">
        <div class="col-md-4 align-right">Title:</div><div class="col-md-6" style="width: 100%';"><textarea name="title">{$details.title}</textarea></div>
      </div>
      <div class="row">
        <div class="col-md-4 align-right">Description:</div><div class="col-md-6"><textarea name="description">{$details.description}</textarea></div>
      </div>
      <div class="row">
        <div class="col-md-4 align-right">Location:</div><div class="col-md-6"><textarea name="location">{$details.location}</textarea></div>
      </div>
      <div class="row">
        <div class="col-md-4 align-right">Salary:</div><div class="col-md-6"><textarea name="salary">{$details.salary}</textarea></div>
      </div>
      <div class="row">
        <div class="col-md-4 align-right"><input type="submit" value="Update item"></div>
      </div>       
    </div>
</form>
{/block}