<?php
	
	$config = require("xmlconfig.php");
	$filepath = $config["xmlpath"];
	function save_data($data)
	{
		$xmldom = new DomDocument('1.0', 'utf-8');
		$xmldom->load("db/database.xml");
		$dataitem = $xmldom->getElementsByTagName("datasource")->item(0);
		$item = arrayToSimpleElement($xmldom, $data);
		$dataitem->appendChild($item);
		echo $xmldom->saveXML();
		$fp =fopen("db/database.xml", "w");
		fwrite($fp, $xmldom->saveXML());
	}
	
	function get_all_data()
	{	
		global  $filepath;
		$xml= simplexml_load_file($filepath);
		$data = json_encode($xml);
		$data = array();
		for($i=0;$i<count($xml);$i++)
		{
			$money =(float)$xml->dataitem[$i]->money;
			$cost_time =(string) $xml->dataitem[$i]->cost_time;
			$reason =(string) $xml->dataitem[$i]->reason;
			
			array_push($data, array("money"=>$money,
								"cost_time"=>$cost_time,
								"reason"=>$reason));
		}
		return json_encode($data) ;
	}
	
	function  arrayToSimpleElement(DOMDocument $dom ,$data)
	{
		$item = $dom->createElement("dataitem");
		$money= $dom->createElement("money",$data["money"]);
		$cost_time=$dom->createElement("cost_time",$data["cost_time"]);
		$reason = $dom->createElement("reason",$data["reason"]);
		$item->appendChild($money);
		$item->appendChild($cost_time);
		$item->appendChild($reason);
		return $item;
	}
?>