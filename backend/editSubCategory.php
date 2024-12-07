
<?php
  include 'conn.php';

$sub_cat_id=$_REQUEST['sub_cat_id'];
$catName=$_REQUEST['catName'];
$cat_id=$_REQUEST['category'];

$sql="UPDATE tbl_sub_sports_category SET sub_cat_name = '$catName',
                                            cat_id='$cat_id'
                                     WHERE sub_cat_id = '$sub_cat_id'";
$rs=$conn->query($sql);

if($rs>0){
    
    echo 200;
    exit();
}else{
    echo 300;
    exit();
}


?>