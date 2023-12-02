<?php 

session_start();
if(isset($_SESSION['username'])){

    require_once("admin-header.php");

    require_once("admin-sidebar.php");

    require_once("admin-topbar.php");

    ///require_once("admin-content.php");

   ?>
   <div class="content-wrapper">
          <div class="content">   

          <form action="userimage-save.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                      
                       
                        <div class="form-group col-md-12 mb-4">
                          <input type="file" class="form-control input-lg" name="userimage" id="email" aria-describedby="emailHelp" placeholder="userimage">
                        </div>

                     
                          

                          <button type="submit" class="btn btn-primary btn-pill mb-4">Update</button>

                         
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