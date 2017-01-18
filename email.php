<?php
$to = $_GET["email"];
$subject = "hunt4place team";

$message = "
<html>
<head>
<title>Hunt4place team</title>
</head>
<body>
<p>Thanks for being part of hunt4place.Find your food and entertainment places.</p><br>
<p>please confirm your email address on hunt4place!!!</p><br>
<table>
<tr>
<td><a href='www.hunt4place.in/hunt4place/updateconfirmation.php?email=".$_GET['email']."'>Varify your email with hunt4place..</a></td>
</tr><br><br>
<a href='www.hunt4place.in/hunt4place/updateconfirmation.php?email=".$_GET['email']."'><input type='button' onClick='confirm()' value='varify your email'></a>
<b><p>Thanks for your patients..</p></b>
</table>
<script>
function confirm(){
window.location.href='www.hunt4place.in/hunt4place/updateconfirmation.php?email=".$_GET['email']."';
}
</script>
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
window.location.assign('emailconfirmation.php');
</script>

</body>
</html>