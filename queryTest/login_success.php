<?php
require_once 'checklogin1.php';

if(!session_is_registered(myusername)){
header("location:main_login.html");
}
?>

<html>
<body>
Login Successful
<?php
echo 'username';
?>
</body>
</html>