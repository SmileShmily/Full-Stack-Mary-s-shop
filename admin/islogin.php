<?php
session_start();

if(empty ($_SESSION["username"]))
    {
       echo "<script>alert('Please correct login background administrator system');top.location.href='login.php'</script>";
       exit;
    }

?>
