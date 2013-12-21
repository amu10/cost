<?php 
include 'easyuihead.php';

?>
<script type="text/javascript" src="js/detail.js"></script>
<table id="dg" title="消费信息" class="easyui-datagrid" style="width:800px;height:600px margin: 4px auto auto"
		url="costmanger.php?action=allcost"
		toolbar="#toolbar"
		rownumbers="true" fitColumns="true" singleSelect="true"  pagination="true" >
	<thead>
		<tr>
			<div field="id" style="display: none;"></div>
			<th field="money" width="50">消费金额</th>
			<th field="cost_time" width="50">消费时间</th>
			<th field="reason" width="50">消费原因</th>
			<th field="post_time" width="50">操作时间</th>
		</tr>
	</thead>
</table>
	<!--  	<div class="easyui-pagination" style="border:1px solid #ddd;" data-options="total:114, -->
<!-- 			layout:['list','sep','first','prev','links','next','last','sep','refresh']"> -->
<!-- 		</div> -->
<div id="toolbar">
	<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">添加消费</a>
	<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editdata()">编辑消费</a>
	<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="deldata()">删除消费</a>
</div>