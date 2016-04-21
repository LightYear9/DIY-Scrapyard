<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">
        <title>Sign Up!</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="assets/js/ie-emulation-modes-warning.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="">
<link rel="shortcut icon" href="images/s_icon.ico" type="image/x-icon">
 <link rel="icon" href="images/s_icon.ico" type="image/x-icon">
 <title>scrapyard</title>
 <script type="text/javascript">
 WebFontConfig = {
 google: { families: [ 'Londrina+Shadow::latin', 'Lato:400,900:latin' ] }
 };
 (function() {
 var wf = document.createElement('script');
 wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
 '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
 wf.type = 'text/javascript';
 wf.async = 'true';
 var s = document.getElementsByTagName('script')[0];
 s.parentNode.insertBefore(wf, s);
 })();
function imgTransp() {
 document.getElementById("imgID").style.opacity = "0.5"}
function imgOpac() {
 document.getElementById("imgID").style.opacity = "1.0"}
function toggleMe(a){
var e=document.getElementById(a);
if(!e)return true;
if(e.style.display=="none"){
e.style.display="block"
else{
e.style.display="none"
return true;
 </script>
    <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
                    <!-- Custom CSS -->
                    <link href="css/agency.css" rel="stylesheet">
   
                            <!-- Custom Fonts -->
                            <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                                    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"
                                            type="text/css">
                                            <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/
                                                    css'>
                                                    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic'
                                                            rel='stylesheet' type='text/css'>
                                                            <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700'
                                                            rel='stylesheet' type='text/css'>
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <![endif]-->
  </head>
  <body>
<body id="page-top" class="index">
 
 
 <!-- Navigation -->
 <nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
 <div class="navbar-header page-scroll">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-
example-navbar-collapse-1">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand page-scroll" href="index.html">scrapyard</a>
 </div>
 <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 <ul class="nav navbar-nav navbar-right">
 <li class="hidden">
 <a href="#page-top"></a>
 </li>
 
 <li>
 <a class="page-scroll" href="index.html#signUp">Sign Up</a>
 </li>
 
 <li>
 <a class="page-scroll" href="index.html#Featured">Featured</a>
 </li>
 
 <li>
 <a class="page-scroll" href="index.html#team">Team</a>
 </li>
 
 <li>
 <a class="page-scroll" href="YourProfilePage.html">Log in</a>
 </li>
 
 </ul>
 </div>
 <!-- /.navbar-collapse -->
 </div>
 <!-- /.container-fluid -->
 </nav>
<div class="container">    
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4" style="margin-top: 125px;">
                <legend style="color:white"><img src="images/scrapy.jpg" width="120"></a> Join Scrapyard Today!</legend>
                    <!-- <legend><i class="glyphicon glyphicon-globe"></i><p style="margin-top: 20px;"></p></a> Join Scrapyard Today!</legend> -->
                <?php
                    require_once 'login.php';
    $db_server = mysql_connect($db_hostname, $db_username, $db_password);

    if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
    
    mysql_select_db($db_database)
        or die("Unable to select database: " . mysql_error());


    // if (isset($_POST['username']) &&
 //         isset($_POST['password']) &&
 //         isset($_POST['email']))
 //  {
    
    $username   = get_post('username');
    $password   = get_post('password');
    $email      = get_post('email');
    $password1  = get_post('password1');
   

    $query = "INSERT INTO members VALUES ('$username', '$password','$password1','$email')";
    //$result = mysql_query($query);
    //if (!$result) die ("Database access failed: " . mysql_error());

    if (!mysql_query($query, $db_server))
      echo "INSERT failed: $query<br>" .
      mysql_error() . "<br><br>";
     

     
  //}
     
					 //session_start();session_destroy();
					 //session_start();
					
						if($password==$password1)
						{
						//$servername="scrapyard";
						//$username="abernade";
						//$conn=  mysql_connect($servername,$username)or die(mysql_error());
						//mysql_select_db("scrapyard",$conn);
						//$sql="insert into users (name,email,password)values('$_GET[username]','$_GET[youremail]','$_GET[password]')";
						//$result=mysql_query($sql,$conn) or die(mysql_error());		
						echo "<h1>you have registered sucessfully</h1>";
					   
						echo "<a href='Loginuser.php'>go to login page</a>";
						}
						
					
					   else echo"invaild input data";
                    


function get_post($var)
  {
    return mysql_real_escape_string($_POST[$var]);
  }

					?>
            </div>
        </div>
</div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>