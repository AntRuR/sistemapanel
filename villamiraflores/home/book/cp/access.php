<?php
session_start();
// on.y if the user is logged 
if(!isset($_SESSION['cppassBSI'])) {
   header('Location:index.php?msg=requires_login');
   exit;
}
?>