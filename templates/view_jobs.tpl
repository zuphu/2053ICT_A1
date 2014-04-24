{extends file="layout.tpl"}
{block name=title}View Jobs{/block}
{block name=content}

<H1>Jobs</H1>
    {if !empty($jobs)}
      {foreach $jobs as $job}
      <h2>{$job.title}</H2>
      <ul>
        <li><a class="ay" href="job_details.php?id={$job.id}">{$job.description}</a><br/>
        </li>
      </ul>
      {/foreach}
    {else}
      No Jobs Available
    {/if}

{/block}


