<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 14:25:12
         compiled from "views/cms_show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:527879348583eb698037767-47491225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f04a5145743f29b9be2bf124c431cf6d28b45372' => 
    array (
      0 => 'views/cms_show.tpl',
      1 => 1481289907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '527879348583eb698037767-47491225',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_583eb6980a7928_27554001',
  'variables' => 
  array (
    'SCRIPT_NAME' => 0,
    'error' => 0,
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eb6980a7928_27554001')) {function content_583eb6980a7928_27554001($_smarty_tpl) {?><style>
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

<form action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=admin&cms_action=add" method="post">
  <table border="1">
    <?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?>
      <tr>
      <td bgcolor="yellow" colspan="2">
      <?php if ($_smarty_tpl->tpl_vars['error']->value=="name_empty") {?>You must supply a name.
      <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=="comment_empty") {?> You must supply a comment.
      <?php }?>
      </td>
      </tr>
    <?php }?>
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
     <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
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
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['schoolname'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['adress'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['zipcode'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['district'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['telnr'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['email'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['website'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['openday'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['openclass'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['infonight'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['private'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['concept'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['specials'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['tto'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['sports'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['tec'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['spanish'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['vso'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['vmbob'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['vmbok'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['vmbot'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['havo'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['vwo'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['gymnasium'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['basis'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['art'];?>
</td>
    <td><a href="?action=admin&cms_action=edit&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">edit</a></td>
    <td><a href="?action=admin&cms_action=delete&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">delete</a></td>
  </tr>
    <?php } ?>
</table><?php }} ?>
