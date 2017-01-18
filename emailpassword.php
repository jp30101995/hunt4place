<?php
$to = $_POST["email"];
$subject = "hunt4place team";
include 'connect.php';
$result=mysqli_query($con,"select Password from login where Email='".$_POST['email']."'");
$row=mysqli_fetch_assoc($result);
$password=$row["Password"];
$message ="
<html>
<head>
<title>Hunt4place team</title>
</head>
<body>
<p>Thanks for being part of hunt4place.Find your food and entertainment places.</p><br>
<table>
<tr>
<td><p>Your password is <b>".$password."</b></td>
</tr><br><br>
<b><p>Thanks for your patients..</p></b>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <teamh4p@hunt4place.in>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
<html>
<body>
<script>
window.location.assign('login1.php');
</script>

</body>
</html>