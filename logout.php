<?php 
   session_start();
   session_destroy();
   unset($_SESSION['email']);
   unset($_SESSION['userId']);

   $_SESSION['message'] = "Logout sucessfull";
   header("location:index.php");

   ?>