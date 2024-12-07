<?php
include "../backend/conn.php";

$cat_id=$_REQUEST['cat_id'];


$sqlCat="SELECT * FROM tbl_sports_category WHERE cat_id='$cat_id'";
$rsCat=$conn->query($sqlCat);

if($rsCat->num_rows>0){
    $rowsCat=$rsCat->fetch_assoc();
}
    ?>



<div class="container card shadow-lg p-4 mt-4">
    <div class="text-center mb-4">
        <h4 class="modal-title fw-bold text-primary">Edit Category</h4>
        <p class="text-muted">Fill in the form below to edit category</p>
    </div>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="catName" class="form-label fw-semibold">Category Name</label>
            <input 
                type="text" 
                name="catName" 
                id="catName" 
                class="form-control shadow-sm border-primary" 
                placeholder="Enter category name" 
                value="<?= $rowsCat['cat_name'] ?>"
                required>
        </div>
        <div class="d-grid">
            <button 
                type="button" 
                class="btn btn-warning btn-lg shadow-sm" 
                onClick="editCategory(<?= $cat_id ?>)">
                Edit Category
            </button>
        </div>
    </form>
</div>


