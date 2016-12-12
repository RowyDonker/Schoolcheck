<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<table>
    <form>
<!--       <form action="model/add_items.php" method="post" id="add">-->
       <form action="index.php?action=admin&cms_action=add" method="post" id="add">
        Title <input type="text" name="title"><br>
        Content<input type="text" name="content"><br>
        <input type="submit">
    </form>
     {foreach from=$result item=oneItem}
  <tr>
    <th>Company</th>
    <th>Contact</th>
  </tr>
  <tr>
    <td>{$oneItem.title}</td>
    <td>{$oneItem.content}</td>
    <td><a href="?action=admin&cms_action=edit">edit</a></td>
    <td><a href="?action=admin&cms_action=delete&id={$oneItem.id}">delete</a></td>
  </tr>
    {/foreach}
</table>