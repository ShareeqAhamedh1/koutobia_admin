<?php 
include 'conn.php';
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

if($email=="admin" && $password=="123"){
    $_SESSION['sc_id']=1;
    $_SESSION['logged_in']=true;
    header('location:../index.php');
    exit();
}else{
    $_SESSION['logged_in_failed']=true;
    header('location:../login.php');
    exit();

}

// $sql="SELECT * FROM service_station_admin WHERE s_email='$email' AND s_password='$password'";
// $rs=$conn->query($sql);

// if($rs->num_rows==1){
//     $rowUser=$rs->fetch_assoc();
//     if($rowUser['verify_status']==0){
//         $_SESSION['not_verified']=true;
//         header('location:../login.php');
//         exit();
//     }else if($rowUser['verify_status']==1){
//        // $rowUser['h_a_id']=$_SESSION['h_a_id'];
//         $_SESSION['s_a_id']=$rowUser['s_a_id'];
//         $_SESSION['logged_in']=true;
//         header('location:../index.php');
//         echo 200;
//         exit();
//     }else if($rowUser['verify_status']==2){
//         $_SESSION['verify_rejected']=true;
//         header('location:../login.php');
//         exit();
//     }else{

//     }
    
// }else{
//     $_SESSION['logged_in_failed']=true;
//     header('location:../login.php');
//     exit();
// }
?>