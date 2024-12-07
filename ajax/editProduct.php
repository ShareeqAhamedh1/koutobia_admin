<?php 
include "../backend/conn.php";

$prod_id=$_REQUEST['prod_id'];


$sqlProduct="SELECT * FROM products WHERE product_id='$prod_id'";
$rsProduct=$conn->query($sqlProduct);

if($rsProduct->num_rows>0){
    $rowsProd=$rsProduct->fetch_assoc();
    ?>

<div class="container card-body">
    <form action="backend/editProduct.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="pName">Product Name</label>
            <input type="hidden" value="<?= $rowsProd['product_id'] ?>" name="prod_id">
            <input type="text" name="pName" id="pName" value="<?= $rowsProd['product_name'] ?>" class="form-control" placeholder="Enter Product name" required>
        </div>

        <div class="form-group">
            <label for="pDesc">Description</label>
            <input type="text" name="pDesc" id="pDesc" value="<?= $rowsProd['description'] ?>" class="form-control" placeholder="Enter product description" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="<?= $rowsProd['price'] ?>" class="form-control" placeholder="Enter price" required>
        </div>

        <div class="form-group">
            <label for="pStock">Stock</label>
            <input type="text" name="pStock" id="pStock" value="<?= $rowsProd['stock'] ?>" class="form-control" placeholder="Enter stock quantity" required>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="" disabled selected>Select Category</option>
                <!-- Example options; replace with actual categories as needed -->

                <?php $sqlCat="SELECT * FROM categories";
                        $rsCat=$conn->query($sqlCat);

                        if($rsCat->num_rows>0){
                            while($rowsCat=$rsCat->fetch_assoc()){
                                ?> 
                     <option value="<?= $rowsCat['category_id'] ?>"><?= $rowsCat['category_name'] ?></option>
                
                <?php
                            }
                        }
                    ?>
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
</div>


    
<?php
}
?>
