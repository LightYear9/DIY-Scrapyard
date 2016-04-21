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
                <form action="register.php" method=get class="form" role="form">
               <!--- <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="firstname" placeholder="First Name" type="text"
                            required autofocus />    
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />    
                    </div>
                </div> --->
                <input class="form-control" name="username" placeholder="Username" type="username" />
                <input class="form-control" name="youremail" placeholder="Your Email" type="email" />
                <input class="form-control" name="password" placeholder="New Password" type="password" />
                    <input class="form-control" name="password1" placeholder="Confirm Password" type="password" />
                <label style="color:white" for="">
                    Birth Date</label>
                <div class="row">
                    <div class="col-xs-4 col-md-4">
                        <select class="form-control">
                           
                                                                    <option value="0" selected="1">Month</option>
                                            <option value="1">Jan</option>
                            <option value="2">Feb</option>
                                             <option value="3">Mar</option>
                                             <option value="4">Apr</option>
                                             <option value="5">May</option>
                                             <option value="6">Jun</option>
                                             <option value="7">Jul</option>
                                             <option value="8">Aug</option>
                                             <option value="9">Sep</option>
                                             <option value="10">Oct</option>
                                             <option value="11">Nov</option>
                                             <option value="12">Dec</option>
                        </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <select class="form-control">
                           
                                                            <option value="0" selected="1">Day</option>
                                             <option value="1">1</option>
                                             <option value="2">2</option>
                                             <option value="3">3</option>
                                             <option value="4">4</option>
                                             <option value="5">5</option>
                                             <option value="6">6</option>
                                             <option value="7">7</option>
                                             <option value="8">8</option>
                                             <option value="9">9</option>
                                             <option value="10">10</option>
                                             <option value="11">11</option>
                                             <option value="12">12</option>
                                             <option value="13">13</option>
                                             <option value="14">14</option>
                                             <option value="15">15</option>
                                             <option value="16">16</option>
                                             <option value="17">17</option>
                                             <option value="18">18</option>
                                             <option value="19">19</option>
                                             <option value="20">20</option>
                                             <option value="21">21</option>
                                             <option value="22">22</option>
                                             <option value="23">23</option>
                                             <option value="24">24</option>
                                             <option value="25">25</option>
                                             <option value="26">26</option>
                                             <option value="27">27</option>
                                             <option value="28">28</option>
                                             <option value="29">29</option>
                                             <option value="30">30</option>
                                             <option value="31">31</option>
                        </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <select class="form-control">
                            <option value="0" selected="1">Year</option>
                                             <option value="2014">2014</option>
                                             <option value="2013">2013</option>
                                             <option value="2012">2012</option>
                                             <option value="2011">2011</option>
                                             <option value="2010">2010</option>
                                             <option value="2009">2009</option>
                                             <option value="2008">2008</option>
                                             <option value="2007">2007</option>
                                             <option value="2006">2006</option>
                                             <option value="2005">2005</option>
                                             <option value="2004">2004</option>
                                             <option value="2003">2003</option>
                                             <option value="2002">2002</option>
                                             <option value="2001">2001</option>
                                             <option value="2000">2000</option>
                                             <option value="1999">1999</option>
                                             <option value="1998">1998</option>
                                             <option value="1997">1997</option>
                                             <option value="1996">1996</option>
                                             <option value="1995">1995</option>
                                             <option value="1994">1994</option>
                                             <option value="1993">1993</option>
                                             <option value="1992">1992</option>
                                             <option value="1991">1991</option>
                                             <option value="1990">1990</option>
                                             <option value="1989">1989</option>
                                             <option value="1988">1988</option>
                                             <option value="1987">1987</option>
                                             <option value="1986">1986</option>
                                             <option value="1985">1985</option>
                                             <option value="1984">1984</option>
                                             <option value="1983">1983</option>
                                             <option value="1982">1982</option>
                                             <option value="1981">1981</option>
                                             <option value="1980">1980</option>
                                             <option value="1979">1979</option>
                                             <option value="1978">1978</option>
                                             <option value="1977">1977</option>
                                             <option value="1976">1976</option>
                                             <option value="1975">1975</option>
                                             <option value="1974">1974</option>
                                             <option value="1973">1973</option>
                                             <option value="1972">1972</option>
                                             <option value="1971">1971</option>
                                             <option value="1970">1970</option>
                                             <option value="1969">1969</option>
                                             <option value="1968">1968</option>
                                             <option value="1967">1967</option>
                                             <option value="1966">1966</option>
                                             <option value="1965">1965</option>
                                             <option value="1964">1964</option>
                                             <option value="1963">1963</option>
                                             <option value="1962">1962</option>
                                             <option value="1961">1961</option>
                                             <option value="1960">1960</option>
                                             <option value="1959">1959</option>
                                             <option value="1958">1958</option>
                                             <option value="1957">1957</option>
                                             <option value="1956">1956</option>
                                             <option value="1955">1955</option>
                                             <option value="1954">1954</option>
                                             <option value="1953">1953</option>
                                             <option value="1952">1952</option>
                                             <option value="1951">1951</option>
                                             <option value="1950">1950</option>
                                             <option value="1949">1949</option>
                                             <option value="1948">1948</option>
                                             <option value="1947">1947</option>
                                             <option value="1946">1946</option>
                                             <option value="1945">1945</option>
                                             <option value="1944">1944</option>
                                             <option value="1943">1943</option>
                                             <option value="1942">1942</option>
                                             <option value="1941">1941</option>
                                             <option value="1940">1940</option>
                                             <option value="1939">1939</option>
                                             <option value="1938">1938</option>
                                             <option value="1937">1937</option>
                                             <option value="1936">1936</option>
                                             <option value="1935">1935</option>
                                             <option value="1934">1934</option>
                                             <option value="1933">1933</option>
                                             <option value="1932">1932</option>
                                             <option value="1931">1931</option>
                                             <option value="1930">1930</option>
                                             <option value="1929">1929</option>
                                             <option value="1928">1928</option>
                                             <option value="1927">1927</option>
                                             <option value="1926">1926</option>
                                             <option value="1925">1925</option>
                                             <option value="1924">1924</option>
                                             <option value="1923">1923</option>
                                             <option value="1922">1922</option>
                                             <option value="1921">1921</option>
                                             <option value="1920">1920</option>
                                             <option value="1919">1919</option>
                                             <option value="1918">1918</option>
                                             <option value="1917">1917</option>
                                             <option value="1916">1916</option>
                                             <option value="1915">1915</option>
                                             <option value="1914">1914</option>
                                             <option value="1913">1913</option>
                                             <option value="1912">1912</option>
                                             <option value="1911">1911</option>
                                             <option value="1910">1910</option>
                                             <option value="1909">1909</option>
                                             <option value="1908">1908</option>
                                             <option value="1907">1907</option>
                                             <option value="1906">1906</option>
                                             <option value="1905">1905</option>
                        </select>
                    </div>
                </div>
                <label style="color:white" class="radio-inline">
                    <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                    Male
                </label>
                <label style="color:white" class="radio-inline">
                    <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                    Female
                </label>
                <br />
                <br />
                <input type="submit" name="submit" value="register me!"></input>
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



