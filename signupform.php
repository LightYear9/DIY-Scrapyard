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
    
    $username   = get_post('username');
    $password   = get_post('password');
    $email 		  = get_post('email');
    $password1  = get_post('password1');

   

    $query = "INSERT INTO members VALUES ('$username', '$password','password1','$email')";
    //$result = mysql_query($query);
    //if (!$result) die ("Database access failed: " . mysql_error());

    if (!mysql_query($query, $db_server))
      echo "INSERT failed: $query<br>" .
      mysql_error() . "<br><br>";
     

     function get_post($var)
  {
    return mysql_real_escape_string($_POST[$var]);
  }
  //}
     

?>


