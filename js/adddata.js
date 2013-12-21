$(function(){
	$("#savedata").click(function(){
		var  time = new Date($("input[name='cost_time']").val()).getTime();
		var data ={'money':$("select[name='money']").val(),
				   'cost_time':time,
				   'reason':$("input[name='reason']").val()
				 };
		console.log(data.money+" "+data.cost_time+"  "+data.reason);
		$.post(
				"costmanger.php?action=savedata",
				data,
				function(data){
					if(data>0)
					{
						alert('success');
					}else{
						alert('faild');
					}
					
				},
				'json'
		);
	});
})();