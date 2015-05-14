 !DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Student Support System</title>  

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet"> 

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=" file:///D:/wamp/www/varun/startbootstrap-freelancer-1.0.3/index.html">Student Support System IIPS DAVV</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://localhost/varun/startbootstrap-freelancer-1.0.3/#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://localhost/varun/startbootstrap-freelancer-1.0.3/#features">Features</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://localhost/varun/startbootstrap-freelancer-1.0.3/#cells">Cells</a>
                    </li>
                      <li class="page-scroll">
                        <a href="http://localhost/varun/register_index.php#page-top">Register</a>
                    </li>
                    <li class="page-scroll">
                        <a href=" http://localhost/varun/login_index.php">Student Section</a>
                    </li>
                    <li class="page-scroll">
                        <a href=" http://localhost/varun/admin_panel/">Authorised Login</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="http://localhost/varun/startbootstrap-freelancer-1.0.3/#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    </header>


 
 

 
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

 


<br><br><br><br><br><br><br><br><br> 
<html>
<head>
<title>Admin Panel</title>
</head>
<body>
 
<?php include 'connect.php';?>


<?php include 'functions.php';?>
<?php include 'title_bar.php';?>
<h3>Admin Panel</h3>
 
<?php
 if($user_level != 1){
 header('location:profile.php')	;}
?>
<p>
<a href='admin.php?type=user'>User settings</a> |
<a href=''>Level settings </a> 
</p>
<p>
<?php
if(isset($_GET['type']) && !empty($_GET['type'])){
?>
<table>
<tr><td width = '250px'><b>Users<b></td><td><b>Options<b></td></tr>
<?php

$list_query = mysql_query("SELECT `id`,`username`,`type` FROM `users`"  );
while ($run_list = mysql_fetch_assoc($list_query)){
$u_id = $run_list['id'];
$u_username = $run_list['username'];
$u_type = $run_list['type'];


}
?>
<tr><td><?php echo $u_username ?></td><td>
<?php 
if($u_type == 'a'  ){
  echo"<a href ='options.php?u_id=$u_id & type=$u_type'>Deactivate</a>";
}else{
	echo"<a href ='options.php?u_id=$u_id & type=$u_type'>Activate</a>";

}


?>
</td></tr>
</table>
<?php 	 
 }
?>
   <br><br><br>
<footer>
<div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy;<b> Created by:Vaibhav Sabharwal & Varun Wadhwani</b>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 </body>
 </html>