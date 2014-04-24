{extends file="layout.tpl"}
{block name=title}Job Details{/block}
{block name=content}

<H1>Job Details</H1>
    {foreach $details as $detail}
      <h2>{$detail.title}</h2>
        <div class="container">
          <div class="row">
            <div class="col-md-4 align-right">Title:</div><div class="col-md-6">{$detail.title}</div>
          </div>
          <div class="row">
            <div class="col-md-4 align-right">Description:</div><div class="col-md-6">{$detail.description}</div>
          </div>
          <div class="row">
            <div class="col-md-4 align-right">Location:</div><div class="col-md-6">{$detail.location}</div>
          </div>
          <div class="row">
            <div class="col-md-4 align-right">Salary:</div><div class="col-md-6">{$detail.salary}</div>
          </div>
        </div>
      <br/>
      <a class="ax" href="update_details.php?id={$detail.id}">[Update]</a> <a class="ax" href="delete_job.php?id={$detail.id}&amp;empID={$empID}">[Delete]</a>
    {/foreach}

{/block}


