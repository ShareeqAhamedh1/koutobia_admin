<div class="container card shadow-lg p-4 mt-4">
    <div class="text-center mb-4">
        <h4 class="modal-title fw-bold text-primary">Add New Category</h4>
        <p class="text-muted">Fill in the form below to add a new category</p>
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
                required>
        </div>
        <div class="d-grid">
            <button 
                type="button" 
                class="btn btn-primary btn-lg shadow-sm" 
                onClick="addCategory()">
                Add Category
            </button>
        </div>
    </form>
</div>
