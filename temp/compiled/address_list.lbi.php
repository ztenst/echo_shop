<?php if ($this->_var['consignee_list']): ?>
<ul>
<?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee_0_69600000_1527132053');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee_0_69600000_1527132053']):
?>
<li <?php if ($this->_var['consignee_0_69600000_1527132053']['def_addr'] == 1): ?>class="curr"<?php endif; ?>  onmouseover="showAddressEdit(this);" onmouseout="showAddressEdit(this);" >
<div style="width:100%;height:100%;" onclick="selAddress(this, <?php echo $this->_var['consignee_0_69600000_1527132053']['address_id']; ?>);"  >
<table cellpadding=0 cellspacing=0 width="100%">
<tr><td><?php echo $this->_var['consignee_0_69600000_1527132053']['address_short_name']; ?></td></tr>
</table>
</div>
<div  class="edit_addr" id="address_edit_<?php echo $this->_var['sn']; ?>"><a  href="javascript:AddressEdit(<?php echo $this->_var['consignee_0_69600000_1527132053']['address_id']; ?>);">修改</a> <a  href="javascript:del_Address(<?php echo $this->_var['consignee_0_69600000_1527132053']['address_id']; ?>);" onclick="return confirm('您确认要删除吗？');">删除</a></div>
</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<div class="blank10"></div>
<div class="address_jm_add" onclick="AddressEdit(0);">使用新地址</div>
<?php else: ?>
<div class="blank10"></div><div class="blank10"></div>
<table cellpadding=4 cellspacing=4 width="100%">
<tr><td align=right><font color=#ff3300>*</font>收件人</td><td><input type="text" name="consignee" class="input_addr2"></td></tr>
<tr><td align=right><font color=#ff3300>*</font>所在地区</td>
<td>
<input type="hidden" name="country" value="1">
<select name="province" id="selProvinces" onchange="region.changed(this, 2, 'selCities');"  style="width:155px;height:25px;border:1px solid #ccc;">
<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
 <?php $_from = $this->_var['shop_province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
        <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <select name="city" id="selCities" onchange="region.changed(this, 3, 'selDistricts');" style="width:155px;height:25px;border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
        <?php $_from = $this->_var['city_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
        <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <select name="district" id="selDistricts" style="display:none; width:155px; height:25px; border:1px solid #ccc;" >
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
        <?php $_from = $this->_var['district_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
        <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
</td></tr>
<tr><td align=right><font color=#ff3300>*</font>街道地址</td><td><input type="text" name="address" class="input_addr1"></td></tr>
<tr><td style="text-align:right;"><!-- <font color=#ff3300>*</font> -->电子邮箱</td><td><input type="text" name="email" class="input_addr1" value="<?php echo $this->_var['address']['email']; ?>"></td></tr>
<tr><td align=right>邮编</td><td><input type="text" name="zipcode" class="input_addr3"></td></tr>
<tr><td align=right><font color=#ff3300>*</font>手机号码</td><td><input type="text" name="mobile" class="input_addr2">&nbsp;&nbsp;&nbsp;&nbsp;或固定电话 <input type="text" name="tel_01" class="input_addr4"> - <input type="text" name="tel_02" class="input_addr3"> - <input type="text" name="tel_03" class="input_addr4"></td></tr>
<tr><td></td><td><font color=#cccccc>两者至少填写一项</font></td></tr>
<tr><td></td><td style="padding-top:10px;">
<input type="hidden" name="address_id" value="0" >
<input type="hidden" name="shipping_bian" value="1" >
<input type="hidden" name="closediv" value="0" >
<input type="button" class="BonusButton" value=" 确定 " onclick="submitAddress()"></td></tr>
</table>

<?php endif; ?>
