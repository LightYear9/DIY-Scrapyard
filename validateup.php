<?php

	/*
	//require_once 'login.php';
	$db_hostname = 'localhost';
	$db_database = 'bdelgad2';
	$db_username = 'bdelgad2';
	$db_password = 'Yod@103!';
	$db_tableName = 'members';
	
	$db_server = mysql_connect($db_hostname, $db_username, $db_password);

	if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
	
	mysql_select_db($db_database)
		or die("Unable to select database: " . mysql_error());


	// if (isset($_POST['username']) &&
 //      	isset($_POST['password']) &&
 //      	isset($_POST['email']))
 //  {
    
    echo "you successfully login";
	
	

    $query = mysql_query("SELECT * FROM members WHERE username = '". $username ."' OR password = '". $password ."'"); 
if (mysql_num_rows($query) > 0) 
{ 
     echo 'Username or email already in use.'; 
}
else echo sorry try again

    


     

     function get_post($var)
  {
    return mysql_real_escape_string($_POST[$var]);
  }
  //}
     */
	 

// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];

// Connect to the database
$con = mysql_connect("localhost","bdelgad2","Yod@103!");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("members",$con);

$result = mysql_query("SELECT users_email, users_pass FROM users WHERE users_email = $email");

$row = mysql_fetch_array($result);

if($row["users_email"]==$email && $row["users_pass"]==$pass)

    echo "You are a validated user.";
	
else
    echo"Sorry, your credentials are not valid, Please try again.";



?>




