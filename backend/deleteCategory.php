<?php

    include "conn.php";

    $cat_id=$_REQUEST['cat_id'];

    // $sqlSearch="SELECT * FROM products WHERE category_id='$cat_id'";
    // $rsSearch=$conn->query($sqlSearch);

    // if($rsSearch->num_rows>0){
    //     echo 400;
    //     exit();
    // }else{

    $sql="DELETE FROM tbl_sports_category WHERE cat_id='$cat_id'";
    $rs=$conn->query($sql);

    if($rs>0){
        echo 200;
        exit();
    }else{
        echo $sql;
        exit();
    }
    // }
?>