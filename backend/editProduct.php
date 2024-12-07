
<?php
  include 'conn.php';

$prod_id=$_REQUEST['prod_id'];
$pName=$_REQUEST['pName'];
$pDesc=$_REQUEST['pDesc'];
$price=$_REQUEST['price'];
$stock=$_REQUEST['pStock'];
$category=$_REQUEST['category'];

$sql="UPDATE products SET product_name = '$pName',
                        description = '$pDesc',
                        price = '$price',
                        stock = '$stock',
                        category_id = '$category' 
                                     WHERE product_id = '$prod_id'";
$rs=$conn->query($sql);

if($rs>0){
    
    header('location:../products.php');
    exit();
}else{
    echo 300;
    exit();
}


?>