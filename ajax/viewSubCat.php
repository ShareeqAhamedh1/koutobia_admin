<?php 
include "../backend/conn.php";
$cat_id=$_REQUEST['cat_id'];

if($cat_id!=""){
    ?>



<div class="container">
<?php
                                            $sqlCat="SELECT * FROM tbl_sub_sports_category WHERE cat_id='$cat_id'";
                                            $rsCat=$conn->query($sqlCat);

                                            if($rsCat->num_rows>0){
                                                ?>
                                                
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sub Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                                <?php
                                                while ($rowsCat=$rsCat->fetch_assoc()) {
                                                   
                                                  ?> 
                                        <tr>

                                            <?php
                                           
                                                ?> 
                                            <td><?= $rowsCat['sub_cat_name'] ?></td>

                                            <td><button type="button" class="btn btn-sm btn-danger" onclick="deleteSubCat(<?= $rowsCat['sub_cat_id'] ?>,<?= $cat_id ?>)"><i class="ri-delete-bin-6-line"></i></button>
                                            <button type="button" class="btn btn-sm btn-warning" onclick="OpenEditSubCategory(<?= $rowsCat['sub_cat_id'] ?>,<?= $cat_id ?>)"><i class="ri-edit-box-fill"></i></button>
                                            </td>
                                        </tr>

                                        <?php
                                                }
                                                ?>
                                    </tbody>
                                </table>

                                
                                <?php
                                            }else{
                                                ?>
                                                <h4>No sub Categories added</h4>
                                                <?php
                                            }
                                        ?>
                            </div>    <?php
}

?>