<?php
	
include('config.php');

$json = file_get_contents('https://'.$location.'.emp-access.de/api_gate.php?hardware='.$hardware.'&id='.$scan.'');
$json = json_decode($json, true);
		
		if($json[access] == 1)
		{
			$access = 1;
		}else
		{
			$access = 0;
		}	
?>