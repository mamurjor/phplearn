<?php
require_once("site_header.php");

if(isset($_GET['msg'])){
    echo $_GET['msg'];
}

?>

<table>
    <tr>
    <td>
       Sl No. 
    </td>
    <td>
         Name 
    </td>
    <td>
         Image  
    </td>
    <td>
         Price 
    </td>
    <td>
         Qty 
    </td>
    <td>
        Product Total Price  
    </td>
    <td>
        Action 
    </td>
</tr>

<?php
   $total=0;
if(isset($_SESSION['cart'])){
    $slno = 1;
 
    foreach($_SESSION['cart'] as $single_cart){

?>
<form action="updatecart.php" method="post">
<tr>
    <td>
     <?php echo $slno;?>
    </td>
    <td>
        <?php echo $single_cart['product_name'];?>
        <input type="hidden" name="pro_id" value="<?php echo $single_cart['pro_id'];?>">
    </td>

    <td>
      
    <img src="auth/<?php echo $single_cart['image'];?>" width="50" height="60"   alt="">
        
    </td>
    <td>
    <?php echo $single_cart['price'];?>
    </td>
    <td>

    <input type="text" name="qty"  value="<?php echo $single_cart['qty'];?>" id="">
   
    
    </td>
    <td>

    <?php 
    $price = (int) $single_cart['price'];
    $qty = $single_cart['qty'];
     $total_price = $price*$qty;
     echo $total_price;
    //  $total +=$total_price;
     ?>
        <?php echo $single_cart['price']*$single_cart['qty']?>
    </td>
    <td>
       <button type="submit">Update </button>

       <a href="removeitem.php?id=<?php echo $single_cart['pro_id'];?>"> Remove </a>
    </td>
</tr>
</form>
<?php
$slno++;
    }}
?>

</table>

<?php

echo $total;

 require_once("site_footer.php");
 ?>