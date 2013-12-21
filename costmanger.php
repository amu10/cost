<?php
require_once 'db/TxtDb.php';
if(isset($_GET['action']))
{
	$action = $_GET['action'];
	$data;
	if ($action=='allcost') {
		if($_POST['page']&&$_POST['rows']&&!empty($_POST['page'])&&!empty($_POST['rows'])){
			$page = $_POST['page']-1 <0 ? 0: $_POST['page']-1;
			$row = 	$_POST['rows'];
			$start = $page*$row;
			$limit =array($start,$row);
			$data = selectwhere(null, $limit);
		}else{
			$data = selectAll();
		}
		$result['rows']=$data;
		$result['total']=selectcount();
		echo json_encode($result);
	}else if($action=="savedata")
	{	
		if($_POST['money']&&$_POST['cost_time']&&!empty($_POST['money'])&&!empty($_POST['cost_time'])){
				$data =array('money'=>$_POST['money'],
							'cost_time'=>$_POST['cost_time'],
							'reason'=>$_POST['reason']
						);
				echo saveData($data);
		}else{
			echo 0;
		}
	}else if($action=="updatedata")
	{
		
	}else if($action=="deldata")
	{
		if(isset($_GET['id']))
		{
			$id =$_GET['id'];
			$data = array('id='.$id);
			echo deleteData($data);
		}
	}
}
?>