
<?php
  include 'conn.php';


$pName=$_REQUEST['pName'];
$category=$_REQUEST['category'];
$sub_category=$_REQUEST['sub_category'];


$sql="INSERT INTO tbl_super_sub_category (super_sub_cat_name,sub_cat_id) VALUES('$pName','$sub_category')";
$rs=$conn->query($sql);

if($rs>0){
    
    echo 200;
    exit();
}else{
    echo 300;
    exit();
}


?>