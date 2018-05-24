<!-- $Id: db_restore.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php if ($this->_var['warning']): ?>
<ul style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
  <li style="border: 1px solid #CC0000; background: #FFFFCC; padding: 10px; margin-bottom: 5px;" ><?php echo $this->_var['warning']; ?></li>
</ul>
<?php endif; ?>
<!-- start list -->
<div class="list-div" id="listDiv">
  <form method="post" action="database.php" enctype="multipart/form-data">
  <table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="2"><?php echo $this->_var['lang']['restore']; ?></th>
  </tr>
  <tr>
    <td><?php echo $this->_var['lang']['sqlfile']; ?></td>
    <td><input type="file" name="sqlfile" size="50"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="hidden" name = "act" value = "upload_sql"><input type="submit" value=<?php echo $this->_var['lang']['upload_and_exe']; ?> class="button"></td>
  </tr>
  </table>
  </form>

</div>
<br />
<br />
<div class="list-div" id="listDiv">
<form action="database.php" name="file_list" method="POST" onsubmit="return confirm('<?php echo $this->_var['lang']['confirm_remove']; ?>');" >
<table>
  <tr>
    <th colspan=7><?php echo $this->_var['lang']['server_sql']; ?></th>
  </tr>
  <tr>
    <th width=48 align="right"><input type="checkbox" name="chkall" onclick="checkall(this.form, 'file[]')"><?php echo $this->_var['lang']['remove']; ?></th>
    <th><?php echo $this->_var['lang']['name']; ?></th>
    <th><?php echo $this->_var['lang']['ver']; ?></th>
    <th><?php echo $this->_var['lang']['add_time']; ?></th>
    <th><?php echo $this->_var['lang']['file_size']; ?></th>
    <th><?php echo $this->_var['lang']['vol']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
  <tr <?php if ($this->_var['item']['mark'] == 2): ?>style="display:none"<?php endif; ?>>
   <td><input type="checkbox" name="file[]" value="<?php echo $this->_var['item']['name']; ?>" /></td>
   <td><?php if ($this->_var['item']['mark'] == 1): ?><img src="images/menu_plus.gif" onclick="rowClicked(this)"><?php endif; ?><?php if ($this->_var['item']['mark'] == 2): ?><img src="images/menu_arrow.gif"><?php endif; ?><a href="../data/sqldata/<?php echo $this->_var['item']['name']; ?>"><?php echo $this->_var['item']['name']; ?></a></td>
   <td><?php echo $this->_var['item']['ver']; ?></td>
   <td><?php echo $this->_var['item']['add_time']; ?></td>
   <td><?php echo $this->_var['item']['file_size']; ?></td>
   <td>vol:<?php echo $this->_var['item']['vol']; ?></td>
   <td align="center"><?php if ($this->_var['item']['mark'] != 2): ?><a href="database.php?act=import&file_name=<?php echo $this->_var['item']['name']; ?>">[<?php echo $this->_var['lang']['import']; ?>]</a><?php else: ?>&nbsp;<?php endif; ?></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr>
    <td colspan=7 align="center"><input type="hidden" name="act" value="remove"><input type="submit" value="<?php echo $this->_var['lang']['submit_remove']; ?>" class="button" />
  </tr>
</table>
</from>
</div>


<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="JavaScript">

onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

function checkall(frm, chk)
{
    for (i = 0; i < frm.elements.length; i++)
    {
        if (frm.elements[i].name == chk)
        {
            frm.elements[i].checked = frm.elements['chkall'].checked;
        }
    }
}

function rowClicked(obj)
{
  var row = obj.parentNode.parentNode;
  var tbl = row.parentNode.parentNode;
  var test = false;
  var img = '';

  if (obj.src.substr(obj.src.lastIndexOf('/') + 1) == "menu_minus.gif")
  obj.src = "images/menu_plus.gif";
  else
  obj.src = "images/menu_minus.gif";



  for (i = 0; i < tbl.rows.length; i++)
  {
    var cell = tbl.rows[i].cells[1];

    if (cell && cell.childNodes[0].src)
    {
      img = cell.childNodes[0].src.substr(cell.childNodes[0].src.lastIndexOf('/') + 1);
    }
    else
    {
      img = '';
    }

    if (test && img)
    {
      if (img == "menu_arrow.gif")
      {
        tbl.rows[i].style.display = tbl.rows[i].style.display != 'none' ? 'none' : (Browser.isIE) ? 'block' : 'table-row';
      }
      else
      {
        test=false;
      }
    }

    if (tbl.rows[i] == row)
    {
      test = true;
    }
  }
}

//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>