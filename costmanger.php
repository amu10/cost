<?php
if(isset($_GET['action']))
{
	$action = $_GET['action'];
	if ($action=='allcost') {
		require_once 'db/TxtDb.php';
		$data =selectAll();
		echo json_encode($data);
	}else if($action=="savedata")
	{	
		if($_GET['money']&&$_GET['cost_time']){
				$data =array('money'=>$_GET['money'],
							'cost_time'=>$_GET['cost_time'],
							'reason'=>$_GET['reason']
							);
				saveData($data);
		}
	}else if($action=="updatedata")
	{
		
	}
}
?>