<?php require_once('ecom-head.php');?>
<body>
    <!-- Topbar Start -->
    <?php require_once('ecom-topbar.php');?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php require_once('ecom-nav.php');?>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
                <h1><?php
                if(isset($_GET['msg'])){
                    echo $_GET['msg'];
                }
                
                ?></h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                      
                    <?php
                $total=0;
                if(isset($_SESSION['cart'])){
                    $slno = 1;
                
                    foreach($_SESSION['cart'] as $single_cart){
                       
                ?>
                 <form action="updatecart.php" method="post">
                    <tr>
                            <td class="align-middle"><img src="<?php echo "../auth/".$single_cart['image'];?>" alt="" style="width: 50px;"> <?php echo  $single_cart['product_name'];?></td>
                            <td class="align-middle"><?php echo $single_cart['price'];?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $single_cart['pro_id'];?>">
                                    <input type="text" name="qty" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo $single_cart['qty'];?>">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"> 
                                <?php echo $single_cart['price']*$single_cart['qty'];?></td>
                            <td class="align-middle">
                                <button type="submit"
                             class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
                            <a href="removeitem.php?id=<?php echo $single_cart['pro_id'];?>"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></a>
                        
                        </td>
                        </tr>
                    </form>
                       <?php
                    }}
                       ?>
                    
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$160</h5>
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer Start -->
    <?php require_once('ecom-footer.php');?>
    <!-- Footer End -->

    <?php require_once('ecom-footer-script.php');?>
    <!-- Back to Top -->
    
</body>

</html>