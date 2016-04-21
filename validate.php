<?php

	require_once 'login.php';
	$db_server = mysql_connect($db_hostname, $db_username, $db_password);

	if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
	
	mysql_select_db($db_database)
		or die("Unable to select database: " . mysql_error());


	// if (isset($_POST['username']) &&
 //      	isset($_POST['password']) &&
 //      	isset($_POST['email']))
 //  {
    
    

    $query = mysql_query("SELECT * FROM members WHERE username = '". $username ."' OR password = '". $password ."'"); 
if (mysql_num_rows($query) > 0) 
{ 
     echo 'Username or email already in use.'; 
}

    


     

     function get_post($var)
  {
    return mysql_real_escape_string($_POST[$var]);
  }
  //}
     

?>


