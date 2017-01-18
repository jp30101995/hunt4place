<?php
//connect.php
$server = 'localhost';
$username   = 'root';
$database   = 'hunt4place';
$con=mysqli_connect($server, $username, "", $database); 
if(mysqli_connect_errno())
{
    exit('Error: could not establish database connection');
}

?>