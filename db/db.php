<?php
	$config = require_once 'config.php';
	$pdsn = "mysql:host=".$config["dburl"].";port=".$config["dbport"].";dbname=".$config["dbname"];
	$pdo = new PDO($pdsn, $config['username'], $config['password']);
	$csql="set NAMES gb2312";
	$pdo->exec($csql);
	function  getAllCost()
	{
		global  $pdo;
		$sql ="select money,cost_time,reason from cost";
		$stm  = $pdo->query($sql);
		$res = $stm->fetchAll(PDO::FETCH_OBJ);
		return $res;
	}
	
	function  save_data($data)
	{
		global  $pdo;
		$sql ="insert into cost(money,cost_time,reason)values(?,?,?)";
		$st = $pdo->prepare($sql);
		$st->execute($data);
	}
?>