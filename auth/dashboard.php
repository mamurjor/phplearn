<?php 

session_start();
if(isset($_SESSION['username'])){

    require_once("admin-header.php");

    require_once("admin-sidebar.php");

    require_once("admin-topbar.php");

    require_once("admin-content.php");

    require_once("admin-footer.php");

   ?>




<?php
}
else{
    $msg = "age login koro";
  header("location: login.php?msg=$msg");
}

?>