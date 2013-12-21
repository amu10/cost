$(function(){
	$("#savedata").click(function(){
		var  time = new Date($("input[name='cost_time']").val()).getTime();
		if(!time){
			$.messager.alert(' ','请重新设置时间','error');
			return ;
		}
		time = time/1000;
		var data ={'money':$("select[name='money']").val(),
				   'cost_time':time,
				   'reason':$("textarea[name='reason']").val()
				 };
		$.post(
				"costmanger.php?action=savedata",
				data,
				function(data){
					if(data>0)
					{
						$.messager.alert('  ','数据保存成功','info');
						$("select[name='money']").val('');
						$("input[name='cost_time']").val('');
						$("textarea[name='reason']").val('');
					}else{
						$.messager.alert(' ','保存失败','error');
					}
					
				},
				'json'
		);
	});
})();

