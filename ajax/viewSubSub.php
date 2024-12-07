<?php 
include "../backend/conn.php";
$sub_cat_id=$_REQUEST['sub_cat_id'];

?>

<div class="container">
<?php
                                            $sqlCat="SELECT * FROM tbl_super_sub_category WHERE sub_cat_id='$sub_cat_id'";
                                            $rsCat=$conn->query($sqlCat);

                                            if($rsCat->num_rows>0){
                                                ?>
                                                
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>SupervSub Category</th>
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
                                            <td><?= $rowsCat['super_sub_cat_name'] ?></td>

                                            <td><button type="button" class="btn btn-sm btn-danger" onclick="deleteSubSubCat(<?= $rowsCat['super_sub_cat_id'] ?>,<?= $sub_cat_id ?>)"><i class="ri-delete-bin-6-line"></i></button>
                                            <button type="button" class="btn btn-sm btn-warning" onclick="OpenEditSubSubCategory(<?= $rowsCat['super_sub_cat_id'] ?>,<?= $sub_cat_id ?>)"><i class="ri-edit-box-fill"></i></button>
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
                            </div>