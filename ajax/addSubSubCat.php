<?php 
include "../backend/conn.php";
?>

<div class="container card shadow-lg p-4 mt-4">
    <div class="text-center mb-4">
        <h4 class="modal-title fw-bold text-primary">Add Sub-Sub Category</h4>
        <p class="text-muted">Fill in the form below to create a new sub-sub category</p>
    </div>
    <form method="post" enctype="multipart/form-data">
      

        <!-- Category Selection -->
        <?php 
        $sqlCat = "SELECT * FROM tbl_sports_category";
        $rsCat = $conn->query($sqlCat);

        if ($rsCat->num_rows > 0) { 
            ?>
            <div class="form-group mb-3">
                <label for="category" class="form-label fw-semibold">Category</label>
                <select 
                    onchange="getCategory(this.value)" 
                    name="category" 
                    id="category" 
                    class="form-control shadow-sm border-primary" 
                    required>
                    <option value="" disabled selected>Select Category</option>
                    <?php
                    while ($rowsCat = $rsCat->fetch_assoc()) {
                        ?>
                        <option value="<?= $rowsCat['cat_id'] ?>"><?= $rowsCat['cat_name'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <!-- Subcategory Selection -->
            <div class="form-group mb-3">
                <label for="sub_category" class="form-label fw-semibold">Sub Category</label>
                <select 
                    name="sub_category" 
                    id="sub_category" 
                    class="form-control shadow-sm border-primary" 
                    onchange="viewSubSubCat(this.value)" 
                    required>
                    <option value="" disabled selected>Select Sub Category</option>
                </select>
            </div>

              <!-- Sub-Sub Category Name -->
        <div class="form-group mb-3">
            <label for="pName" class="form-label fw-semibold">Sub-Sub Category Name</label>
            <input 
                type="text" 
                name="pName" 
                id="pName" 
                class="form-control shadow-sm border-primary" 
                placeholder="Enter Sub-Sub Category name" 
                required>
        </div>
            <?php 
        } 
        ?>

        <!-- Submit Button -->
        <div class="d-grid">
            <button 
                type="button" 
                onClick="addSubSubCategory()" 
                class="btn btn-primary btn-lg shadow-sm">
                Add Sub-Sub Category
            </button>
        </div>
    </form>
</div>
