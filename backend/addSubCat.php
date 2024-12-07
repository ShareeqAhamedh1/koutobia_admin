
<?php
  include 'conn.php';


$pName=$_REQUEST['pName'];
$category=$_REQUEST['category'];

$sql="INSERT INTO tbl_sub_sports_category (sub_cat_name,cat_id) VALUES('$pName','$category')";
$rs=$conn->query($sql);

if($rs>0){
    
    echo 200;
    exit();
}else{
    echo 300;
    exit();
}


?>