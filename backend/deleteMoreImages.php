<?php

    include "conn.php";

    $i_id=$_REQUEST['i_id'];
    $h_id=$_REQUEST['h_id'];

    
    $image=getDataBack($conn,'tbl_hotel_image','i_id',$i_id,'i_name');
    unlink('../assets/img/hotel/'.$image);

    $sql="DELETE FROM tbl_hotel_image WHERE i_id='$i_id' AND h_id='$h_id'";
    $rs=$conn->query($sql);



    if($rs>0){
        echo 200;
        exit();
    }else{
        echo $sql;
        exit();
    }

?>