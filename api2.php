<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a href="https://api.foursquare.com/v2/venues/search?ll=40.7,-74&client_id=0CKYCV2VVOTPEBNIVELTBHFDYSYXZ1RK2ZGV0BSQ1JCKC1MT&client_secret=JQ14JTOETUT5WSARV3MTFH2YERNUPSEBYSPE2QLFSMFUGGAG&v=20160121">Click here</a>
<?php 
$curlhandle = curl_init();
            curl_setopt($curlhandle, CURLOPT_URL, "https://api.foursquare.com/v2/venues/search?ll=40.7,-74&client_id=0CKYCV2VVOTPEBNIVELTBHFDYSYXZ1RK2ZGV0BSQ1JCKC1MT&client_secret=JQ14JTOETUT5WSARV3MTFH2YERNUPSEBYSPE2QLFSMFUGGAG&v=20160121");
            curl_setopt($curlhandle, CURLOPT_RETURNTRANSFER, 1);

            $response = curl_exec($curlhandle);
            curl_close($curlhandle);

            $json = json_decode($response,true);
			//$obj = JSON.parse($json);
            foreach ($json as $result)
            {
                echo $result.response.venues.name.' - '.$json.response.venues.id."<p />";
            }    
?>

</body>
</html>