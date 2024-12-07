<?php 
include "../backend/conn.php";
?>

<div class="container">
<?php
                                            $sqlCategory="SELECT * FROM tbl_sports_category";
                                            $rsCategory=$conn->query($sqlCategory);

                                            if($rsCategory->num_rows>0){
                                                ?>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                                <?php
                                                while ($rowsCategory=$rsCategory->fetch_assoc()) {
                                                  ?> 
                                        <tr>
                                            <td><?= $rowsCategory['cat_name'] ?></td>
                                            <td><button type="button" class="btn btn-sm btn-danger" onclick="deleteCategory(<?= $rowsCategory['cat_id'] ?>)"><i class="ri-delete-bin-6-line"></i></button>
                                            <button type="button" class="btn btn-sm btn-warning" onclick="OpenEditCategory(<?= $rowsCategory['cat_id'] ?>)"><i class="ri-edit-box-fill"></i></button>
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
                                                 <h4> No categories added</h4>
                                                <?php
                                               

                                            }
                                        ?>
                            </div>