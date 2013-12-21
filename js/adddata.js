$(function(){
	$("#savedata").click(function(){
		var  time = new Date($("input[name='cost_time']").val()).getTime();
		var data ={'money':$("select[name='money']").val(),
				   'cost_time':time,
				   'reason':$("textarea[name='reason']").val()
				 };
		console.log(data.money+" "+data.cost_time+"  "+data.reason);
		$.post(
				"costmanger.php?action=savedata",
				data,
				function(data){
					if(data>0)
					{
						$.messager.alert('  ','数据保存成功','info');
						
					}else{
						$.messager.alert(' ','保存失败','error');
					}
					
				},
				'json'
		);
	});
})();

