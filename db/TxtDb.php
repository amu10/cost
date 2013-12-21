<?php
error_reporting(E_ALL^E_NOTICE); 
function __autoload($classname) {
	$filename = "txtsql/" . $classname . ".class.php";
	include($filename);
}


function  getdb()
{
	$db = new txtSQL ("data");
	$db->connect ( "root", "" );
}
function selectAll()
{
	$db = getdb();
	$db->selectdb( "money" );
	$data = array();
	$res = $db->select ( array (
			'table' => 'cost'
	) );
	for($i=0;$i<count($res);$i++)
	{	
		array_push($data, array("money"=>$res[$i]["money"],
								"cost_time"=>date('Y-m-d H:i:s',$res[$i]["cost_time"]),
								"post_time"=>date('Y-m-d H:i:s',$res[$i]["post_time"]),
								"reason"=>$res[$i]["reason"],
								"id"=>$res[$i]["id"]
								)
		);
	}
	return $data;
}

function   selectcount()
{	
	$db = getdb();
	$count = $db->table_count('cost', 'money');
	return $count;
}


function selectwhere($where ,$limit)
{
	$db = getdb();
	$db->selectdb( "money" );
	$data = array();
	$res = $db->select ( array (
			'table' => 'cost',
			'where' => $where,
			'limit' =>$limit
	) );
	for($i=0;$i<count($res);$i++)
	{
	array_push($data, array("money"=>$res[$i]["money"],
	"cost_time"=>date('Y-m-d H:i:s',$res[$i]["cost_time"]),
			"post_time"=>date('Y-m-d H:i:s',$res[$i]["post_time"]),
					"reason"=>$res[$i]["reason"],
					"id"=>$res[$i]["id"]
							)
							);
	}
	return $data;
}


function saveData($data)
{
	
	$db = getdb();
	$db->selectdb( "money" );
	if(!$db->insert(array(
		'db'=>'money',
		'table'=>'cost',
		'values'=>$data)))
	{
		return 0;
	}else {
		return 1;
	}
}

function  updateData($data,$where)
{
	$db = getdb();
	$db->selectdb( "money" );
	if(!$db->update(array(
			'db'=>'money',
			'table'=>'cost',
			'where'=>$where,
			'values'=>$data)))
	{
		return 0;
	}else {
		return 1;
	}
}

function  deleteData($where)
{
	$db = getdb();
	if(!$db->delete(array(
			'db'=>'money',
			'table'=>'cost',
			'where'=>$where
			)))
	{
		return 0;
	}else {
		return 1;
	}
}

function selectAllTime()
{
	$db = getdb();
	$db->selectdb( "money" );
	$data = array();
	$res = $db->select ( array (
			'table' => 'cost'
	) );
	for($i=0;$i<count($res);$i++)
	{
		array_push($data,$res[$i]["cost_time"]);
	}
	return $data;
}


?>