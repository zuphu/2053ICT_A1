{extends file="layout.tpl"}
{block name=title}Employers{/block}
{block name=content}

<H1>Employers</H1>
    {foreach $employers as $emp}
    <ul>
      <li><a class="ay" href="list_jobs.php?empID={$emp.id}">{$emp.name}</a></li>
    </ul>
    {/foreach}

{/block}


