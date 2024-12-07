<?php
  include 'conn.php';

  $name=$_REQUEST['name'];
  $address=$_REQUEST['address'];
  $phoneno=$_REQUEST['phoneno'];
  $province=$_REQUEST['province'];
  $district=$_REQUEST['district'];
  $city=$_REQUEST['city'];
  // $logo=$_REQUEST['logo'];
  // $banner=$_REQUEST['banner'];
  $sabout=$_REQUEST['sabout'];
//   $htimg=$_REQUEST['htimg'];
//   $htsimg=$_REQUEST['htsimg'];

$sc_id=$_SESSION['sc_id'];

$filePathBanner='../assets/img/banner/';
$filePathtLogo='../assets/img/logo/';
$allowedList=array('jpg','jpeg','png','webp');
$errorLocation= '../addstation.php';

uploadImage('logo',$filePathtLogo,$allowedList,$errorLocation);
$logo = $GLOBALS['fileNameNew'];
uploadImage('banner',$filePathBanner,$allowedList,$errorLocation);
$banner = $GLOBALS['fileNameNew'];

$sql="INSERT INTO tbl_service_center(s_name,s_logo,s_banner,s_phone_number,s_location,s_city,s_district,s_province,s_desc) 
      VALUES ('$name',
              '$logo',
              '$banner',
              '$phoneno',
              '$address',
              '$city',
              '$district',
              '$province',
              '$sabout')";
$rs=$conn->query($sql);


if($rs > 0){
  $_SESSION['station_added_success']=true;
  header('location:../addstation.php');
  exit();
}else{
  $_SESSION['station_added_error']=true;
  header('location:../addstation.php');
  exit();
}

 ?>