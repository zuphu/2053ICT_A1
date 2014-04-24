{extends file="layout.tpl"}
{block name=title}List Jobs{/block}
{block name=content}

<h1>Update item</h1>
<form method="post" action="update_details_action.php">
    <input type="hidden" name="id" value="{$details.id}">
    <table>
      <tr><td>Summary:</td> <td><input type="text" name="summary" value="{$details.summary}"> <br></td></tr>
      <tr><td>Title:</td> <td><textarea name="title">{$details.title}</textarea> <br></td></tr>
      <tr><td>Description:</td> <td><textarea name="description">{$details.description}</textarea> <br></td></tr>
      <tr><td>Location:</td> <td><textarea name="location">{$details.location}</textarea> <br></td></tr>
      <tr><td>Salary:</td> <td><textarea name="salary">{$details.salary}</textarea> <br></td></tr>
      <tr><td><input type="submit" value="Update item"></td></tr>
    </table>

{/block}