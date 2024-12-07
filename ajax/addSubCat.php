<?php 
include "../backend/conn.php";
?>

<div class="container card shadow-lg p-4 mt-4">
    <div class="text-center mb-4">
        <h4 class="modal-title fw-bold text-primary">Add New Sub-Category</h4>
        <p class="text-muted">Fill in the details below to add a new sub-category</p>
    </div>
    <form method="post" enctype="multipart/form-data">

     <!-- Category Dropdown -->
     <div class="form-group mb-3">
            <label for="category" class="form-label fw-semibold">Category</label>
            <select 
                name="category" 
                id="category" 
                class="form-control shadow-sm border-primary" 
                onchange="viewSubCat(this.value)" 
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
        <!-- Sub-Category Name Input -->
        <div class="form-group mb-3">
            <label for="pName" class="form-label fw-semibold">Sub-Category Name</label>
            <input 
                type="text" 
                name="pName" 
                id="pName" 
                class="form-control shadow-sm border-primary" 
                placeholder="Enter sub-category name" 
                required>
        </div>

       

        <!-- Placeholder for dynamically loaded subcategories -->
        <div id="view_category" class="mb-3"></div>

        <!-- Submit Button -->
        <div class="d-grid">
            <button 
                type="button" 
                class="btn btn-primary btn-lg shadow-sm" 
                onClick="addSubCategory()">
                Add Sub-Category
            </button>
        </div>
    </form>
</div>
