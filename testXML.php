<?php
//connect.php
$server = 'localhost';
$username   = 'root';
$database   = 'whatsapp';
$con=mysqli_connect($server, $username, "", $database); 
if(mysqli_connect_errno())
{
    exit('Error: could not establish database connection');
}
/*
$result=mysqli_query($con,"SELECT XML FROM client WHERE FirstName='palak'");
$row=mysqli_fetch_assoc($result);
//SET @xml=$row["XML"];
echo $row["FirstName"];
echo $row["XML"];
echo "<br>";
$xml=simplexml_load_file("myxml.xml");
foreach($xml->children() as $books) { 
    echo $books->title . ", "; 
    echo $books->author . ", "; 
    echo $books->year . ", ";
    echo $books->price . "<br>"; 
} 
*/
$xml = new SimpleXMLElement('<xml/>');

for ($i = 1; $i <= 8; ++$i) {
    $track = $xml->addChild('track');
    $track->addChild('path', "song$i.mp3");
    $track->addChild('title', "Track $i - Track Title");
}

Header('Content-type: text/xml');
print($xml->asXML());
mysqli_query($con,"INSERT INTO client(XML) VALUES ('".$xml."') WHERE FirstName='jimmy'");

?>