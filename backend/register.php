<?php

include 'conn.php';

$username=$_REQUEST['username'];
$useremail=$_REQUEST['useremail'];
$userpassword=$_REQUEST['userpass'];
$dob=$_REQUEST['dob'];
$nicno=$_REQUEST['nicno'];
$phoneno=$_REQUEST['phoneno'];
$useraddress=$_REQUEST['useraddress'];
$verify_status=0;

$filePathtNicFront='../assets/img/hotel_admins/NIC_front/';
$filePathtNicBack='../assets/img/hotel_admins/NIC_back/';
$allowedList=array('jpg','jpeg','png','webp');
$errorLocation= '../register.php';

uploadImage('nicfront',$filePathtNicFront,$allowedList,$errorLocation);
$nicfront = $GLOBALS['fileNameNew'];
uploadImage('nicback',$filePathtNicBack,$allowedList,$errorLocation);
$nicback = $GLOBALS['fileNameNew'];


$sqlSearch="SELECT * FROM tbl_hotel_admin WHERE email = '$useremail'";
$rsSearch=$conn->query($sqlSearch);

if($rsSearch->num_rows==1){
    $rowsSearch=$rsSearch->fetch_assoc();
    if($rowsSearch['verify_status']==0){
        $_SESSION['already_exist']=true;
        header('location:../login.php');
        exit();
    }else if($rowsSearch['verify_status']==1){
        $_SESSION['already_exist_verified']=true;
        header('location:../login.php');
        exit();
    }else if($rowsSearch['verify_status']==2){
        $_SESSION['already_exist_rejected']=true;
        header('location:../login.php');
        exit();
    }else{
        // $_SESSION['already_exist_rejected']=true;
        header('location:../login.php');
        exit();
    }
    
}else{

    $sql="INSERT INTO tbl_hotel_admin(email,phone_no,owner_dob,h_nic_no,nic_front,nic_back,home_address,h_a_name,h_a_password,verify_status) VALUES ('$useremail','$phoneno','$dob','$nicno','$nicfront','$nicback','$useraddress','$username','$userpassword','$verify_status')";
$rs=$conn->query($sql);

    if($rs>0){
    $_SESSION['user_created']=true;
    header('location:../login.php');
    exit();
    }else{
       
        $_SESSION['something_went_wrong']=true;
        header('location:../login.php');
        exit();
}
}




?>