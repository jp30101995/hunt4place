<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600,"/");
?>
<html>
<body>
<script>
window.location.assign('index.php');
</script>
</body>
</html>