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

<form action="{$SCRIPT_NAME}?action=admin&cms_action=add" method="post">
  <table border="1">
    {if $error ne ""}
      <tr>
      <td bgcolor="yellow" colspan="2">
      {if $error eq "name_empty"}You must supply a name.
      {elseif $error eq "comment_empty"} You must supply a comment.
      {/if}
      </td>
      </tr>
    {/if}
    <tr>
      <td valign="top">Schoolname</td>
      <td>
        <textarea name="schoolname" cols="40" rows="10"></textarea>
      </td>
    </tr>
     <tr>
      <td valign="top">Adress</td>
      <td>
        <textarea name="adress" cols="40" rows="10"></textarea>
      </td>
    </tr>
    <tr>
      <td valign="top">Zipcode</td>
      <td>
        <textarea name="zipcode" cols="40" rows="10"></textarea>
      </td>
    </tr>
    <tr>
      <td valign="top">District</td>
      <td>
        <textarea name="district" cols="40" rows="10"></textarea>
      </td>
    </tr>
     <tr>
      <td valign="top">Telefoonnummer</td>
      <td>
        <textarea name="telnr" cols="40" rows="10"></textarea>
      </td>
    </tr>
      <tr>
      <td valign="top">Email</td>
      <td>
        <textarea name="email" cols="40" rows="10"></textarea>
      </td>
    </tr>
    <tr>
      <td valign="top">Website</td>
      <td>
        <textarea name="website" cols="40" rows="10"></textarea>
      </td>
    </tr>
    <tr>
      <td valign="top">Opendag</td>
      <td>
        <textarea name="openday" cols="40" rows="10"></textarea>
      </td>
    </tr>
     <tr>
      <td valign="top">Open klas</td>
      <td>
        <textarea name="openclass" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">Info Avond</td>
      <td>
        <textarea name="infonight" cols="40" rows="10"></textarea>
      </td>
    </tr>   
     <tr>
      <td valign="top">Private</td>
      <td>
        <textarea name="private" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">Concept</td>
      <td>
        <textarea name="concept" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">specials</td>
      <td>
        <textarea name="specials" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">tto</td>
      <td>
        <textarea name="tto" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">Sports</td>
      <td>
        <textarea name="sports" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">tec</td>
      <td>
        <textarea name="tec" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">Spaans</td>
      <td>
        <textarea name="spanish" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">VSO</td>
      <td>
        <textarea name="vso" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">vmbob</td>
      <td>
        <textarea name="vmbob" cols="40" rows="10"></textarea>
      </td>
    </tr>
      <tr>
      <td valign="top">vmbok</td>
      <td>
        <textarea name="vmbok" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">vmbot</td>
      <td>
        <textarea name="vmbot" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">Havo</td>
      <td>
        <textarea name="havo" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">Vwo</td>
      <td>
        <textarea name="vwo" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">Gymnasium</td>
      <td>
        <textarea name="gymnasium" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">Basis</td>
      <td>
        <textarea name="basis" cols="40" rows="10"></textarea>
      </td>
    </tr>
       <tr>
      <td valign="top">Art</td>
      <td>
        <textarea name="art" cols="40" rows="10"></textarea>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" name = "submit" value="Submit">
      </td>
    </tr>
  </table>
</form>
<table>
     {foreach from=$result item=oneItem}
  <tr>
    <th>Schoolname</th>
    <th>Adress</th>
    <th>Zipcode</th>
    <th>District</th>
    <th>Telnr</th>
    <th>Email</th>
    <th>Website</th>
    <th>Openday</th>
    <th>Openclass</th>
    <th>Infonight</th>
    <th>Private</th>
    <th>Concept</th>
    <th>Specials</th>
    <th>TTO</th>
    <th>Sports</th>
    <th>TEC</th>
    <th>Spanish</th>
    <th>VSO</th>
    <th>VMBOB</th>
    <th>VMBOK</th>
    <th>VMBOT</th>
    <th>HAVO</th>
    <th>VWO</th>
    <th>Gymnasium</th>
    <th>Basis</th>
    <th>Art</th>
  </tr>
  <tr>
    <td>{$oneItem.schoolname}</td>
    <td>{$oneItem.adress}</td>
    <td>{$oneItem.zipcode}</td>
    <td>{$oneItem.district}</td>
    <td>{$oneItem.telnr}</td>
    <td>{$oneItem.email}</td>
    <td>{$oneItem.website}</td>
    <td>{$oneItem.openday}</td>
    <td>{$oneItem.openclass}</td>
    <td>{$oneItem.infonight}</td>
    <td>{$oneItem.private}</td>
    <td>{$oneItem.concept}</td>
    <td>{$oneItem.specials}</td>
    <td>{$oneItem.tto}</td>
    <td>{$oneItem.sports}</td>
    <td>{$oneItem.tec}</td>
    <td>{$oneItem.spanish}</td>
    <td>{$oneItem.vso}</td>
    <td>{$oneItem.vmbob}</td>
    <td>{$oneItem.vmbok}</td>
    <td>{$oneItem.vmbot}</td>
    <td>{$oneItem.havo}</td>
    <td>{$oneItem.vwo}</td>
    <td>{$oneItem.gymnasium}</td>
    <td>{$oneItem.basis}</td>
    <td>{$oneItem.art}</td>
    <td><a href="?action=admin&cms_action=edit&id={$oneItem.id}">edit</a></td>
    <td><a href="?action=admin&cms_action=delete&id={$oneItem.id}">delete</a></td>
  </tr>
    {/foreach}
</table>