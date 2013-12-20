<?php 
include 'easyuihead.php';

?>

<table id="dg" title="消费信息" class="easyui-datagrid" style="width:800px;height:600px margin: 4px auto auto"
		url="costmanger.php?action=allcost"
		toolbar="#toolbar"
		rownumbers="true" fitColumns="true" singleSelect="true">
	<thead>
		<tr>
			<th field="money" width="50">花费</th>
			<th field="cost_time" width="50">花费时间</th>
			<th field="reason" width="50">花费原因</th>
		</tr>
	</thead>
</table>
<div id="toolbar">
	<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">添加消费</a>
	<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">编辑消费</a>
	<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">删除消费</a>
</div>