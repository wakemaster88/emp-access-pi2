<?php
	
$account = "twincable-beckum";
$timestamp = time();
$time = date("H:I",$timestamp);

// Admin = 1
// Seilbahn A = 2
//Seilbahn B = 3
//Übungslift = 4
//Browser = 5
//Kasse 1 = 6
//Kasse 2 = 7
//Kasse Büro = 8
//Drehkreuz = 19
$interface_id = 2;

$interface = "gate";
$interface_type = "gate";

$json = file_get_contents('https://'.$account.'.wakesys.com/files_for_admin_and_browser/sql_query/query_operator.php?interface='.$interface.'&interface_id='.$interface_id.'&controller_interface_type='.$interface_type.'&id='.$scan.'');
$json = json_decode($json, true);
		
		//if($json[data][value][card_valid] == "yes" || isset($json[data][value][next_tickets][0]) || $json[data][value][is_valid] == 1)
		if($json[data][value][card_valid] == "yes" || isset($json[data][value][next_tickets_message][0]) || (isset($json[data][value][valid_until])))
		{
			//echo "valid: yes";
			$access = 1;
		}else
		{
			//echo "valid: no";
			$access = 0;
		}
		
?>