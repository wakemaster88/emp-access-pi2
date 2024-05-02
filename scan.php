<?php
	
	//get Scan UID - local
    $scan = $_GET['id'];
	$access = 0;
			
	if(is_numeric($scan) && strlen($scan) == 10)
	{
		include('api_emp.php');
		
		if($access == 0)
		{
			include('api_wakesys.php'); 
		}
    }else
	{
	    include('api_emp.php'); 
		
		if($access == 0)
		{
			include('api_ticketio.php'); 
		}
    }
	
	if($access == 1)
	{
		// Open turnstile and give signal - local
		$command = escapeshellcmd('python3 /var/www/html/python_files/relais.py');
		shell_exec($command);
	}else
	{
		// Give signal - local
		$command = escapeshellcmd('python3 /var/www/html/python_files/buzzer_invalid.py');
		shell_exec($command);
	}
	
?>