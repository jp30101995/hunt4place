<?php
include 'connect.php';
$result=mysqli_query($con,"select Name from login where Email='".$_COOKIE["user"]."'");
$row=mysqli_fetch_assoc($result);

?>
<html>
<body>
    <header class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="index-2.html">
                    	<img src="assets/img/logo.png" alt="logo" />
                        <span>hunt4place</span>
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">

                    <div class="header-bottom">

                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
    <li >
        <a href="#"><?php echo "Hello ".$row['Name']; ?><i></i></a>
    </li>

</ul>

<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->
</header><!-- /.header -->
</body>
</html>
