<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Bootstrap Version2.0 horizontal form browser status example</title>
<meta name="description"
	content="Bootstrap Version2.0 horizontal form browser status example from w3cschool.cc.">
<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
<?php include 'easyuihead.php';?>
<script type="text/javascript" src="js/adddata.js"></script>
</head>
<body>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">保存消费情况</h3>
		</div>
	<div class="panel-body" style="padding-bottom: 20px">
		<form class="form-horizontal" role="form" style="width: 800px">
			<div class="form-group input-group-sm" style="padding-top: 20px">
				<label for="inputEmail3" class="col-sm-2 control-label">消费</label>
				<div class="col-sm-3">
					<select class="form-control"  name="money" >
					  <option value="0.4">0.4  元</option>
					  <option value="0.8">0.8  元</option>
					  <option value="1">1.0 元</option>
					  <option value="1.2">1.2 元</option>
					  <option value="2.0">2.0  元</option>
					  <option value="3">3.0  元</option>
					  <option value="11">11.0  元</option>
					  <option value="13">13.0  元</option>
					  <option value="15">15.0  元</option>
					  <option value="20">20.0  元</option>
					  <option value="20">26.0  元</option>
					</select>
				</div>
			</div>
			<div class="form-group input-group-sm">
				<label for="inputPassword3" class="col-sm-2 control-label">消费时间</label>
				<div class="col-sm-3">
					<input type="text"
						class="form-control easyui-datetimebox input-medium"
						id="inputPassword3" name="cost_time" placeholder="消费时间" style="width: 200px">
				</div>
			</div>
			<div class="form-group input-group-sm">
				<label for="inputPassword3" class="col-sm-2 control-label">消费原因</label>
				<div class="col-sm-5">
					<textarea class="form-control" rows="3" name="reason" placeholder="消费原因" ></textarea>
				</div>
			</div>
			<div class="form-group input-group-sm">
				<div class="col-sm-1 col-sm-offset-2">
					<button  class="btn btn-primary btn-sm" id="savedata">保存数据</button>
				</div>
				<div class="col-sm-1 col-sm-offset-1">
					<button type="reset" class="btn btn-default btn-sm">取消</button>
				</div>
			</div>

		</form>
		</div>
	</div>

</body>
</html>