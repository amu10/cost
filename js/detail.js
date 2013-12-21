$(function(){
	
	
	
})();


function deldata()
{
	 var row = $('#dg').datagrid('getSelected');
	 if (row){
		 $.get(
			"costmanger.php?action=deldata",
			{'id':row.id},
			function(data)
			{
				if(data>0)
				{
					$.messager.alert('  ','删除成功','info');
					$('#dg').datagrid('reload');
				}else{
					$.messager.alert(' ','删除失败','error');
				}
			},
			'json'
		 );
	 }
}
