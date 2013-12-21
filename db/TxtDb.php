<?php
error_reporting(E_ALL^E_NOTICE); 
function __autoload($classname) {
	$filename = "txtsql/" . $classname . ".class.php";
	include_once ($filename);
}
$db = new txtSQL ("data");
$db->connect ( "root", "" );

function selectAll()
{
	global $db;
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

function saveData($data)
{
	global $db;
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
	global $db;
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
	global $db;
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
	global $db;
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