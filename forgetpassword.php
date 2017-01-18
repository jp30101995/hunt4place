<html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" >
    <link href="assets/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css" >
    <link href="assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/superlist1.css" rel="stylesheet" type="text/css" >

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">
<style>
.error {color: #FF0000;}
</style>

    <title>hunt4place-forget password</title>
    
    
    
</head>


<body>

<div class="page-wrapper">
    
<?php
include 'header.php';
?>


    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    


                    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="page-title">
            <h2>Password will be sent by email</h2>
        </div><!-- /.page-title -->

            <div class="form-group">
		<form method="post" action="emailpassword.php">
                <label for="login-form-email">Email</label>
                
                <input type="email" class="form-control" name="email" onKeyUp="suggestions(this.value)" id="login-form-email" value="">
            </div><!-- /.form-group -->
				<input type="submit" value="Send Password">
        </form>
    </div><!-- /.col-sm-4 -->
</div><!-- /.row -->

                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->


</div><!-- /.page-wrapper -->

</body>

</html>
