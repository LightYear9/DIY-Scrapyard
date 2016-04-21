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
<link rel="shortcut icon" href="images/s_icon.ico" type="image/x-icon">
    <link rel="icon" href="images/s_icon.ico" type="image/x-icon">
    <title>Your Scrapyard Profile!</title>
    
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
}
else{
e.style.display="none"
}
return true;
}
        
           
        
    </script>
     
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

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
                <a class="navbar-brand page-scroll" href="index.html">scrapyard</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li>
                       <!-- <a class="page-scroll" href="#signUp">Sign Up</a>-->
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="index.html#Featured">Featured</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="index.html#search1">search</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="index.html#team">Team</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="index.html">Log Out</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>







<body>
  <!--
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html">SCRAPYARD HOW TO</a> </div>
    <div class="navbar-collapse collapse">
      <form class="navbar-form navbar-right" role="form">
        <div class="form-group">
      
        </div>
        
        
        <div class="form-group">
        
                <span>   
                 <a class="navbar-brand" href="../index.html">Hey, JeSeuss!</a>                 
            </span>
        </div>
        <button type="submit" class="btn btn-success">Account</button>
        <a href="SignUp.html" type= "text-align right" button type="submit" class="btn btn-success">Logout </a>
      </form>
    </div>
    <!--/.navbar-collapse --> 


 <!-- </div>
</div>-->
<!--<div class="jumbotron">-->
<div class="container">
  <div class="blog-header">
    <h1 class="blog-title"></h1>
  </div>
  



<div class="container">
  <!--
<ul class="nav nav-tabs" id="myTab">
  <li><a href="#profile">Home</a></li>
  <li class="active"><a href="#home">Profile</a></li>
  <li><a href="#messages">Messages</a></li>
  <li><a href="#settings">Settings</a></li>
</ul>-->
<h1>  </h1>

<br></br>


</div>

<hr>
<div class="container">
  <h1>     </h1>
  <h4>     </h4>
  <div class="row">
      <div class="col-sm-10"><h1><?php echo "$_SESSION[name]! "?></h1></div>
      <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
      <div class="col-sm-3"><!--left col-->
              
          <ul class="list-group">
            <li style="color:#222222" class="list-group-item text-muted">Profile</li>
            <li style="color:#555555" class="list-group-item text-right"><span class="pull-left"><strong>Joined</strong></span> <?php echo "$_SESSION[joined] <br />";?></li>
            <li style="color:#555555" class="list-group-item text-right"><span style="color:#555555" class="pull-left"><strong>Activity</strong></span> <?php if($_SESSION){echo "Online";}else{echo "Offline";} ?></li>
           
            
          </ul> 
               
          
          <ul class="list-group">
            <li style="color:#222222" class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li style="color:#555555" class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span style="color:#222222"> 0</li>
            <li style="color:#555555" class="list-group-item text-right"><span style="color:#555555" class="pull-left"><strong>Likes</strong></span> 0</li>
            <li style="color:#555555" class="list-group-item text-right"><span style="color:#555555" class="pull-left"><strong>Posts</strong></span> 0</li>
          </ul> 
               
          <div class="panel panel-default">
      
            <div class="panel-body">
              <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
      <div class="col-sm-9">
          
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#home" data-toggle="tab">HowTo(s)</a></li>
            <li><a href="#messages" data-toggle="tab">Comments</a></li>
            <li><a href="#settings" data-toggle="tab">Shared</a></li>
          </ul>
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Favorited</th>
                      <th>Self-Created</th>
                      
                
                    </tr>
                  </thead>
                  <tbody id="items">
                    <tr>
                      <td>1</td>
                      <td><a href="tireChange.html">How to change a tire(working)</a> </td>
                      <td><a href="HowTobeMan.html">How to think like a man(working)</a> </td>
                      

                    </tr>
                    <tr>
                      <td>2</td>
                        <td><a href="#">How to win a debut wrestling match</a> </td>
                      <td><a href="#">How to explode a potato with your mind</a> </td>
                     
               
                    </tr>
                    <tr>
                      <td>3</td>
                         <td><a href="#">How to walk like an Egyptian</a> </td>
                      <td><a href="#">How to cook an egg with a potato</a> </td>
       
                    </tr>
                    <tr>
                      <td>4</td>
                        <td><a href="#">How to bass-fish</a> </td>
                      <td><a href="#">How to do the hot potato</a> </td>
                  
                    </tr>
                    <tr>
                      <td>5</td>
                         <td><a href="#">How to catch a predator</a> </td>
                      <td><a href="#">How to tell time with a potato</a> </td>
                    
                    </tr>
                    <tr>
                      <td>6</td>
                        <td><a href="#">How to bring IT</a> </td>
                      

                    </tr>
                    <tr>
                      <td>7</td>
                       <td><a href="#">How to chameleon</a> </td>
                      
              
                    </tr>
                     <tr>
                      <td>8</td>
                        <td><a href="#">How to jump on a horse</a> </td>
                    
                    </tr>
                    <tr>
                      <td>9</td>
                        <td><a href="#">How to break IN prison</a> </td>
             
                    </tr>
                    <tr>
                      <td>10</td>
                         <td><a href="#">How to achieve your dreams</a> </td>
                     
                    </tr>
                  </tbody>
                </table>
                <hr>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4 text-center">
                    <ul class="pagination" id="myPager"></ul>
                  </div>
                </div>
              </div><!--/table-resp-->
              
              <hr>
             
              
             </div><!--/tab-pane-->
            
             <div class="tab-pane" id="settings">
                
           
               
             
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

</div>


  
  </div>
  <!-- /.row --> 
  
</div>
<!-- /.container -->

<div class="blog-footer">
  <p>©All rights reserved to Scrapyard.</p>
</div>

<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    
    
      <!-- jQuery Version 1.11.0 -->
  <script src="js/jquery-1.11.0.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-

easing/1.3/jquery.easing.min.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/cbpAnimatedHeader.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="js/agency.js"></script>
    
    
  </body>
</html>