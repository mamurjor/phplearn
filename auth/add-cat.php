<?php 

session_start();
if(isset($_SESSION['username'])){

    require_once("admin-header.php");

    require_once("admin-sidebar.php");

    require_once("admin-topbar.php");
?>

        <div class="content-wrapper">
                <div class="content">   

                <form action="cat-save.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                            
                            <div class="form-group col-md-12 mb-4">
                                <input type="text" class="form-control input-lg" name="name" id="email" aria-describedby="emailHelp" placeholder="cat name">
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                <input type="file" class="form-control input-lg" name="catimage" id="email" aria-describedby="emailHelp" placeholder="cat image">
                                </div>

                                <button type="submit" class="btn btn-primary btn-pill mb-4">Save </button>

                                
                                </div>
                            </div>
                            </form>

        </div>
        </div>

<?php

    require_once("admin-footer.php");

   ?>




<?php
}
else{
    $msg = "age login koro";
  header("location: login.php?msg=$msg");
}

?>