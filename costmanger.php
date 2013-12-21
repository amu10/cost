<?php
require_once 'db/TxtDb.php';
if(isset($_GET['action']))
{
	$action = $_GET['action'];
	if ($action=='allcost') {
		$data =selectAll();
		echo json_encode($data);
	}else if($action=="savedata")
	{	
		if($_POST['money']&&$_POST['cost_time']){
				$data =array('money'=>$_POST['money'],
							'cost_time'=>$_POST['cost_time'],
							'reason'=>$_POST['reason']
						);
				echo saveData($data);
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