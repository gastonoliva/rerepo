<?php
session_start();
session_destroy();
setcookie("password","",time()-1);
setcookie("email","",time()-1);
header("location: Login.php");
?>
