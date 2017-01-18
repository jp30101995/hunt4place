<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$curlhandle = curl_init();
            curl_setopt($curlhandle, CURLOPT_URL, "https://api.foursquare.com/v2/venues/search?ll=40.7,-74&oauth_token=PGFGD2GNWMBSGCSBCCUWXG0PFG0UPYKRYWYJAEFZJEX5KOWK&v=20160120");
            curl_setopt($curlhandle, CURLOPT_RETURNTRANSFER, 1);

            $response = curl_exec($curlhandle);
            curl_close($curlhandle);

            $json = json_decode($response,true);
			//$obj = JSON.parse($json);
            foreach ($json[2]->responses[0]->venues as $result)
            {
                echo $result.name.' - '.$result.id."<p />";
            }    
?>
</body>
</html>