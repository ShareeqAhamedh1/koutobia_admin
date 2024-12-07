<?php
include "../backend/conn.php";

$sub_cat_id=$_REQUEST['sub_cat_id'];


$sqlSubCat="SELECT * FROM tbl_sub_sports_category WHERE sub_cat_id='$sub_cat_id'";
$rsSubCat=$conn->query($sqlSubCat);

if($rsSubCat->num_rows>0){
    $rowsSubCat=$rsSubCat->fetch_assoc();
}
    ?>



<div class="container card shadow-lg p-4 mt-4">
    <div class="text-center mb-4">
        <h4 class="modal-title fw-bold text-primary">Edit Sub Category</h4>
        <p class="text-muted">Fill in the form below to edit category</p>
    </div>
    <form method="post" enctype="multipart/form-data">

    <div class="form-group mb-3">
            <label for="category" class="form-label fw-semibold">Category</label>
            <select 
                name="category" 
                id="category" 
                class="form-control shadow-sm border-primary" 
                
                required>
                <option value="" disabled selected>Select Category</option>
                <?php 
                // Fetch and display all sports categories
                $sqlCat = "SELECT * FROM tbl_sports_category";
                $rsCat = $conn->query($sqlCat);

                if ($rsCat->num_rows > 0) {
                    while ($rowsCat = $rsCat->fetch_assoc()) {
                        ?>
                        <option value="<?= $rowsCat['cat_id'] ?>"><?= $rowsCat['cat_name'] ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="catName" class="form-label fw-semibold">Category Name</label>
            <input 
                type="text" 
                name="catName" 
                id="catName" 
                class="form-control shadow-sm border-primary" 
                placeholder="Enter category name" 
                value="<?= $rowsSubCat['sub_cat_name'] ?>"
                required>
        </div>
        <div class="d-grid">
            <button 
                type="button" 
                class="btn btn-warning btn-lg shadow-sm" 
                onClick="editSubCategory(<?= $sub_cat_id ?>)">
                Edit Category
            </button>
        </div>
    </form>
</div>


