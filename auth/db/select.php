<?php

require_once("config.php");

$query = "SELECT * FROM user";
$sql = $conn->query($query);

// var_dump($sql);

if($sql->num_rows>0){
 ?>
 <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
 <table>

<tr><td>Username </td>
 <td>Email </td></tr>

 <?php
    while($rows=$sql->fetch_assoc()){
        //var_dump($rows);
?>

<tr>
<td><?php echo $rows['username'];?></td>
<td><?php echo $rows['email'];?></td>
</tr>  


 
<?php
    }

    ?>
   
 </table>
    <?php

    //echo "Data paichi";
}
else  {
    echo "Data pai nai";
}

?>