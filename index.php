<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<meta http-equiv="refresh" content="60" />
		<title>Raspberry Pi Web-Interface Local</title>
  	</head>
  	<body bgcolor="#21888f">
  	<script>
            var qr = '';
            document.addEventListener("keypress", function(event) {
            if(event.key != 'Enter')
            {
                qr = qr + event.key;
            }
            if(event.key == 'Enter')
            {
                var objXMLHttpRequest = new XMLHttpRequest();
                
                objXMLHttpRequest.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				console.log(this.responseText);
				}
    			};
                
                objXMLHttpRequest.open("GET", "scan.php?id=" + qr, true);
                objXMLHttpRequest.send();
                qr = '';
            }
            });
  	</script>
	<div align="center"><h1><?php include('config.php'); echo $name; ?></h1>
	</div><hr>
	</body>
</html>

