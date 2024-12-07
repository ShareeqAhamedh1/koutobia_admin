<?php

    include "conn.php";

    $sub_cat_id=$_REQUEST['sub_cat_id'];

    // $sqlSearch="SELECT * FROM products WHERE category_id='$cat_id'";
    // $rsSearch=$conn->query($sqlSearch);

    // if($rsSearch->num_rows>0){
    //     echo 400;
    //     exit();
    // }else{

    $sql="DELETE FROM tbl_sub_sports_category WHERE sub_cat_id='$sub_cat_id'";
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