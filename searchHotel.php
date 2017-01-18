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
    <link href="assets/css/superlist.css" rel="stylesheet" type="text/css" >

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">
<style>
.error {color: #FF0000;}
</style>

    <title>hunt4place-Hotel Search</title>
    
    
    <script>
function suggestions(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
function suggestions2(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint2").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "gethint2.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
    
</head>


<body>

<div class="page-wrapper">
    



    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    


                    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="page-title">
            <h1>Search Hotel</h1>
        </div><!-- /.page-title -->

            <div class="form-group">
                <label for="login-form-email">Food places</label>
                
                <input type="email" class="form-control" name="email" onKeyUp="suggestions(this.value)" id="login-form-email" value="">
                <p>Suggestions:<br><span id="txtHint"></span></p>
            </div><!-- /.form-group -->
            <div class="form-group">
                <label for="login-form-email">Places for entertainment</label>
                
                <input type="text" class="form-control" name="place" onKeyUp="suggestions2(this.value)" id="login-form-email" value="">
                <p>Suggestions:<br><span id="txtHint2"></span></p>
            </div><!-- /.form-group -->

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
