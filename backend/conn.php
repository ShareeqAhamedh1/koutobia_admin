<?php
error_reporting(0);
date_default_timezone_set('Asia/Dubai');

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_koutoubia";
// $dbname_02 = "db_location";


// $servername = "localhost";
// $username = "posfkpop_db_frieght_admin";
// $password = "X,]YR&gniDfg";
// $dbname = "posfkpop_db_frieght";
//
// $username1 = "posfkpop_world_admin";
// $password1 = "%o;g{b(wT(v3";
// $dbname1 = "posfkpop_world";

$current_date_time = date('Y/m/d H:i:s');

$conn = new mysqli($servername,$username,$password,$dbname);
// $conn_loc = new mysqli($servername,$username1,$password1,$dbname1);
// $conn_loc = new mysqli($servername,$username,$password,$dbname_02);



// if(isset($_SESSION['h_s_a_id'])){
//   $h_s_a_id = $_SESSION['h_s_a_id'];
// }
// function getUserProgressCount($conn,$u_id,$qst){
//   $sql = "SELECT * FROM tbl_quote WHERE u_id='$u_id' AND q_status='$qst'";
//   $rs=$conn->query($sql);

//   return $rs->num_rows;
// }



function uploadImage($fileName,$filePath,$allowedList,$errorLocation){

  $img = $_FILES[$fileName];
  $imgName =$_FILES[$fileName]['name'];
  $imgTempName = $_FILES[$fileName]['tmp_name'];
  $imgSize = $_FILES[$fileName]['size'];
  $imgError= $_FILES[$fileName]['error'];

  $fileExt = explode(".",$imgName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = $allowedList;

  if(in_array($fileActualExt, $allowed)){
    if($imgError == 0){
      $GLOBALS['fileNameNew']='ecom'.uniqid('',true).".".$fileActualExt;
        $fileDestination = $filePath.$GLOBALS['fileNameNew'];

        $resultsImage = move_uploaded_file($imgTempName,$fileDestination);

      }
      else{
        header('location:'.$errorLocation.'?imgerror');
        exit();
      }
  }
  else{
    header('location:'.$errorLocation.'?extensionError&'.$fileActualExt);
    exit();
  }
}

function getDataBack($conn,$table,$col_id,$id,$coulmn){
  $sql = "SELECT * FROM $table WHERE $col_id = '$id'";
  $rs = $conn->query($sql);

  if ($rs->num_rows > 0) {
    $row = $rs->fetch_assoc();

    return $row[$coulmn];
  }
}

function time_elapsed_string($datetime, $full = false) {
  $now = new DateTime;
  $ago = new DateTime($datetime);
  $diff = $now->diff($ago);

  $diff->w = floor($diff->d / 7);
  $diff->d -= $diff->w * 7;

  $string = array(
      'y' => 'year',
      'm' => 'month',
      'w' => 'week',
      'd' => 'day',
      'h' => 'hour',
      'i' => 'minute',
      's' => 'second',
  );
  foreach ($string as $k => &$v) {
      if ($diff->$k) {
          $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
      } else {
          unset($string[$k]);
      }
  }

  if (!$full) $string = array_slice($string, 0, 1);
  return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function formatTimeDifference($date_time) {
  $date_time_now = date('Y-m-d H:i:s');

  // Convert string dates to DateTime objects
  $datetime1 = new DateTime($date_time);
  $datetime2 = new DateTime($date_time_now);

  // Calculate the difference between two dates
  $interval = $datetime1->diff($datetime2);

  // Format the result
  if ($interval->days == 0) {
      // Within the same day
      if ($interval->h > 0) {
          return $interval->h . ' hour' . ($interval->h > 1 ? 's' : '') . ' ago';
      } elseif ($interval->i > 0) {
          return $interval->i . ' minute' . ($interval->i > 1 ? 's' : '') . ' ago';
      } else {
          return 'Just now';
      }
  } else {
      // More than 24 hours ago, show the original date and time
      return $datetime1->format('Y-m-d H:i:s');
  }
}

?>
