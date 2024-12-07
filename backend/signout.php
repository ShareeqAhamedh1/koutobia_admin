<?php
include 'conn.php';
if (isset($_SESSION['h_a_id'])) {
    // session_destroy();
    unset($_SESSION['h_a_id']); // Unset the admin session variable
} 

// $u_id=$_SESSION['u_id'];
// $sqlActivity = "INSERT INTO tbl_user_activity_report (u_id,data_feild,activity_datetime) VALUES('$uid','Logged Out','$current_date_time')";
// $rsActivity = $conn->query($sqlActivity);

header('location:../login.php');
exit();
 ?>
