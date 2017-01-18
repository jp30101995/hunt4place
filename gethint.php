<html>
<body>

<?php
include 'connect.php';
$sql = "SELECT H_Name,H_Id FROM food_latest";
$result=mysqli_query($con,$sql);
$a = array();
$id = array();
while($row = $result->fetch_assoc())
{
    $a[] = $row["H_Name"];
	$id[] = $row["H_Id"];
}
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
echo '<table style="z-index:300">';
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name){
        if (stristr($name,$q)) {
            if ($hint === "") {
                $hint = "<br><tr><td><a target='_blank' href='info.php?name=".$name."'>". $name."</a></td></tr>";
            } else {
                $hint .= "<br><tr><td><a target='_blank' href='info.php?name=".$name."'>". $name."</a></td></tr>";
            }
        }
    }
}
echo "</table>";
// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>

</body>
</html>