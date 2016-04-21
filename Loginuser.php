

<?php
session_start();
?>
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
 <a class="page-scroll" href="Loginuser.php#Log in">Log in</a>
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
                <legend style="color:white"> <img src="images/scrapy.jpg" width="120"></a> <br> <font size="4"> Join Scrapyard Today!</legend>
                    <!-- <legend><i class="glyphicon glyphicon-globe"></i><p style="margin-top: 20px;"></p></a> Join Scrapyard Today!</legend> -->
             
<?php    
// define variables and set to empty values




$nameErr = $emailErr = $passwordErr = $confirmPWErr = "";
$name = $email = $password = $confirmPW  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["username"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
   if (empty($_POST["password"])) {
     $passwordErr = "Password is required";
   } else {
     $password = test_input($_POST["password"]);
     
   }

   if (empty($_POST["confirmPW"])) {
     $confirmPWErr = "";
   } else {
     $confirmPW = test_input($_POST["confirmPW"]);
     if($confirmPW != $password){
      $confirmPWErr = "Passwords do not match";
  }
      else{
        $confirmPWErr = "Passwords match";
      }
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>



<p><span class="error">* required field.</span></p>
<form method="post" action="YourProfilePage.php"> 


   <input class="form-control" type="text" style="color:#555555" placeholder= "Username*" name="username" required value="<?php echo $username;?>">
   <!--<span class="error"> <?php echo $nameErr;?></span>
   <br><br>-->

   
   <input class="form-control"  type="password" style="color:#555555" placeholder= "Password*" name="password" required value="<?php echo $password;?>">
   <!--<span class="error"> <?php echo $passwordErr;?></span>
   <br><br>-->

 
   <br><br>


   <button  class="btn btn-lg btn-primary btn-block" type="submit">  Log in </button>




</form>







<!--
<form action="welcome_get.php" method="get">

UserName: <input type="text" name="username"><br>
E-mail: <input type="text" name="email"><br>
Password: <input type="text" name="password"><br>
Confirm Password: <input type="text" name="confirm password"><br>
E-mail: <input type="text" name="email"><br>






                <label style="color:white" for="">
                    Birth Date</label>



                <div class="row">
                 
                  
                   
                </div>
</form>-->
              
                <br />
                <br />
             
                </form>
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



