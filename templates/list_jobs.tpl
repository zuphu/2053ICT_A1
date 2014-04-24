{extends file="layout.tpl"}
{block name=title}List Jobs{/block}
{block name=content}

<H1>Jobs</H1>
<a class="ax" href="create_job.php?empID={$empID}"><strong>+</strong> Add new job</a>
    {if !empty($jobs)}
      {foreach $jobs as $job}
      <H2>{$job.title}</H2>
      <ul>  
        <li><a class="ay" href="job_details.php?id={$job.id}&amp;empID={$empID}">{$job.description}</a><br/>
        </li>
      </ul>
      {/foreach}
    {else}
      No Jobs Available
    {/if}

{/block}


