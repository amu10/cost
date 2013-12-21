<html>
<head>
	<meta charset="UTF-8">
	<title>花费记录理财</title>
	<?php include 'easyuihead.php';?>
	<script type="text/javascript" src=""></script>
	<script type="text/javascript">
	function addTab(title, url){
		if ($('#content').tabs('exists', title)){
			$('#content').tabs('select', title);
		} else {
			var content = '<iframe scrolling="auto" frameborder="0"  src="'+url+'" style="width:100%;height:100%;"></iframe>';
			$('#content').tabs('add',{
				title:title,
				content:content,
				closable:true
			});
		}
	}
	</script>
</head>
<body>

	<div class="easyui-layout" style="width:100%;height:600px;margin: 4px auto auto">
		<div region="west" split="true" title="功能菜单" style="width:250px;">
		<ul id="tt" class="easyui-tree">
		       <li>
		       		<span>录入功能</span> 
		       		<ul>
			            <li><span><a onclick="addTab('录入记录','adddata.php')">录入记录</a></span></li>
			         </ul>   
		       </li>
		       <li>
		       		<span>统计功能</span> 
		       		<ul>
			            <li ><span><a onclick="addTab('查看所有','detail.php')">查看所有</a></span></li>
			         </ul>   
		       </li>  
		</ul>
			
		</div>
		<div id="content" region="center" class="easyui-tabs"  style="padding:0px;">
				<div title="Home">
					<iframe scrolling="auto" frameborder="0"  src="detail.php" style="width:100%;height:100%;"></iframe>
				</div>
		</div>
	</div>
</body>
</html>

