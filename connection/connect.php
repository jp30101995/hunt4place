<?php
//connect.php
$server = 'localhost';
$username   = 'hunt4place';
$database   = 'hunt4place';
$con=mysqli_connect($server, $username, "Imgenius11", $database); 
if(mysqli_connect_errno())
{
    exit('Error: could not establish database connection');
}

?>