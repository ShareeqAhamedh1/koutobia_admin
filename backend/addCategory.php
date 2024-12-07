
<?php
  include 'conn.php';


$catName=$_REQUEST['catName'];

$sql="INSERT INTO tbl_sports_category (cat_name) VALUES('$catName')";
$rs=$conn->query($sql);

if($rs>0){
    
    echo 200;
    exit();
}else{
    echo 300;
    exit();
}


?>