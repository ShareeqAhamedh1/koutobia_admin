<?php 
include "conn.php";

// Get POST variables
$h_a_id = $_REQUEST['h_a_id'];
$h_id = $_REQUEST['h_id'];

$moreimage = $_FILES['moreimage']['tmp_name'];

$allowedList=array('jpg','jpeg','png','webp');
$errorLocation= '../hoteldetails.php';

if($moreimage != ""){

    $moreimageOrg=$_REQUEST['moreimage'];

    $filePathtMoreImg='../assets/img/hotel/';
    uploadImage('moreimage',$filePathtMoreImg,$allowedList,$errorLocation);
    $moreimageOrg = $GLOBALS['fileNameNew'];

    $sql="INSERT INTO tbl_hotel_image(i_name,h_id) VALUES('$moreimageOrg','$h_id')";
    $rs=$conn->query($sql);

    // $sql = "UPDATE tbl_hotel_edit SET h_thumb_img='$icimageOrg' WHERE h_e_id='$last_id'";
    // $rs=$conn->query($sql);
}



if($rs>0){
    echo 200;
    exit();
}else{
    echo $sql;
    exit();
}



?>
