<?php 

session_start();
if(isset($_SESSION['username'])){

    require_once("admin-header.php");

    require_once("admin-sidebar.php");

    require_once("admin-topbar.php");
?>

        <div class="content-wrapper">
                <div class="content">   

                <form action="product-save.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                            
                            <div class="form-group col-md-12 mb-4">
                                <input type="text" class="form-control input-lg" name="name" id="email" aria-describedby="emailHelp" placeholder="product name">
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                <input type="text" class="form-control input-lg" name="regular_price" id="email" aria-describedby="emailHelp" placeholder="product Regular Price">
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                <input type="text" class="form-control input-lg" name="salse_price" id="email" aria-describedby="emailHelp" placeholder="product Sales Price">
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <label for="cate">Select Cat </label>
                                    <select name="cat_id" id="" class="form-control input-lg">
                                    <?php
      
      require_once("db/config.php");

                    $query = "SELECT * FROM category";
                $sql = $conn->query($query);

                // var_dump($sql);

                if($sql->num_rows>0){
                    while($rows=$sql->fetch_assoc()){

                        ?>


                <option value="<?php echo $rows['id'];?>"><?php echo $rows['name'];?></option>
                <?php

                    }
                }
                    
                    ?>
                                       
                                    </select>
                              
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <label for="cate">Select Brand </label>
                                    <select name="brand_id" id="" class="form-control input-lg">
                                      
                                <?php
      
      require_once("db/config.php");

                    $query = "SELECT * FROM brand";
                $sql = $conn->query($query);

                // var_dump($sql);

                if($sql->num_rows>0){
                    while($rows=$sql->fetch_assoc()){

                        ?>


                <option value="<?php echo $rows['id'];?>"><?php echo $rows['name'];?></option>
                <?php

                    }
                }
                    
                    ?>
                              
                                    </select>
                              
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                <input type="file" class="form-control input-lg" name="productimage" id="email" aria-describedby="emailHelp" placeholder="product image">
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