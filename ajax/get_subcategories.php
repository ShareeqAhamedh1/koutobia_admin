<?php
include "../backend/conn.php";
$cat_id=$_REQUEST['cat_id'];
?>
 <option value="" disabled selected>Select Sub Category</option>
                <!-- Example options; replace with actual categories as needed -->

                <?php $sqlCat="SELECT * FROM tbl_sub_sports_category WHERE cat_id='$cat_id'";
                        $rsCat=$conn->query($sqlCat);

                        if($rsCat->num_rows>0){
                            while($rowsCat=$rsCat->fetch_assoc()){
                                ?> 
                     <option value="<?= $rowsCat['sub_cat_id'] ?>"><?= $rowsCat['sub_cat_name'] ?></option>
                
                <?php
                            }
                        }
                    ?>