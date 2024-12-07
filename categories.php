<?php include "layout/header.php"; 
?>

		<!--APP-CONTENT START-->
		<div class="main-content app-content">
			<div class="container-fluid">

				
					<div class="row" id="user-profile">
					<div class="col-lg-12">
						<div class="card custom-card">
							<div class="card-body">
                                <div class="container">
                                    <button class="btn btn-sm btn-success" onClick="openModelAddCategory()">Add Category</button>
                                    <button class="btn btn-sm btn-warning" onClick="openModelAddSubCat()">Add Sub Category</button>
									<button class="btn btn-sm btn-primary" onClick="openModelAddSubSubCat()">Add Sub Sub Category</button>
									<button class="btn btn-sm btn-secondary" onClick="openModelAddProduct()">Add Product</button>
                                </div>
							</div>
							<div id="view_products">

</div>
						</div>
					</div>
				</div>

				<!-- ROW-1 CLOSED -->
			</div>
		</div>
		<!--APP-CONTENT CLOSE-->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="input-group">
                    <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                    <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username">
                    <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                    <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fe fe-more-vertical"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="mt-4">
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                    <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                  </div>
                  <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="notifications.html"><span>Notifications</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="alerts.html"><span>Alerts</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                      <a href="mail.html"><span>Mail</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="btn-group ms-auto">
                    <button class="btn btn-sm btn-primary-light">Search</button>
                    <button class="btn btn-sm btn-primary">Clear Recents</button>
                  </div>
                </div>
              </div>
            </div>
        </div>

		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					
					<div class="modal-body ">
						<div class="row">
							<div class="col-lg-12" id="add_products">
								<!-- Dynamic content for editing will be loaded here -->
							</div>
						
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<!-- Modal Structure -->
		<div class="modal fade" id="showEdit" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-12 mb-3" id="add_category">
								<!-- Additional dynamic content will be loaded here -->
							</div>
							<div class="col-lg-12" id="view_category">
								<!-- Additional dynamic content will be loaded here -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="showSub" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-12 mb-3" id="add_subcategory">
								<!-- Additional dynamic content will be loaded here -->
							</div>
							<div class="col-lg-12" id="view_subcategory">
								<!-- Additional dynamic content will be loaded here -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="showSubSub" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-12 mb-3" id="add_subsubcategory">
								<!-- Additional dynamic content will be loaded here -->
							</div>
							<div class="col-lg-12" id="view_subsubcategory">
								<!-- Additional dynamic content will be loaded here -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<?php include("layout/footer.php"); ?>

		<script>

            $('#view_products').load('ajax/viewProducts.php');

            function openModelAddSubCat(){
                $('#showSub').modal('show');
				$('#add_subcategory').load('ajax/addSubCat.php');
				
            }

			function openModelAddSubSubCat(){
                $('#showSubSub').modal('show');
				$('#add_subsubcategory').load('ajax/addSubSubCat.php');
            }

            function openModelAddCategory(){
                $('#showEdit').modal('show');
				$('#add_category').load('ajax/addCategory.php');
                $('#view_category').load('ajax/viewCategory.php');
				
            }

            function addCategory(){
                var catName = document.getElementById('catName').value;

                $.ajax({
			  url:'backend/addCategory.php',
			  method:'POST',
			  data:{
				catName:catName
			  },
			  success:function(resp){
				  if(resp == 200){
					swal("Added", "Category added", "success")
					.then((value) => {
						if (value) {
							$('#add_category').load('ajax/addCategory.php');
							$('#view_category').load('ajax/viewCategory.php');
						}
					});
				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
							$('#add_category').modal('hide');
							window.location.reload();
						}
					});
                     console.log(resp);
				  }
			  }
		  });
            }

			
			function addSubCategory(){
                var pName = document.getElementById('pName').value;
				var category = document.getElementById('category').value;


                $.ajax({
			  url:'backend/addSubCat.php',
			  method:'POST',
			  data:{
				pName:pName,
				category:category
			  },
			  success:function(resp){
				  if(resp == 200){
					swal("Added", "Sub Category added", "success")
					.then((value) => {
						if (value) {
							$('#add_subcategory').load('ajax/addSubCat.php');
							$('#view_subcategory').load('ajax/viewSubCat.php',{cat_id:category});
						}
					});
				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
							$('#showSub').modal('hide');
							window.location.reload();
						}
					});
                     console.log(resp);
				  }
			  }
		  });
            }

			function viewSubCat(categoryId) {
				if (categoryId) {
					// Load the subcategories dynamically into a specific container
					$('#view_subcategory').load('ajax/viewSubCat.php', { cat_id: categoryId });
				}
			}

			function viewSubSubCat(categoryId) {
				if (categoryId) {
					// Load the subcategories dynamically into a specific container
					$('#view_subsubcategory').load('ajax/viewSubSub.php', { sub_cat_id: categoryId });
				}
			}

			function addSubSubCategory(){
                var pName = document.getElementById('pName').value;
				var category = document.getElementById('category').value;
				var sub_category = document.getElementById('sub_category').value;
				// alert(sub_category)


                $.ajax({
			  url:'backend/addSubSubCat.php',
			  method:'POST',
			  data:{
				pName:pName,
				category:category,
				sub_category:sub_category
			  },
			  success:function(resp){
				  if(resp == 200){
					swal("Added", "Sub Sub Category added", "success")
					.then((value) => {
						if (value) {
							$('#add_subsubcategory').load('ajax/addSubSubCat.php');
							$('#view_subsubcategory').load('ajax/viewSubSub.php',{sub_cat_id:sub_category});
						}
					});
				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
							$('#showSubSub').modal('hide');
							window.location.reload();
						}
					});
                     console.log(resp);
				  }
			  }
		  });
            }

			function getCategory(id){

				$('#sub_category').load('ajax/get_subcategories.php',{cat_id:id});
		  
			}



          
			

			function deleteCategory(id){
				$.ajax({
			  url:'backend/deleteCategory.php',
			  method:'POST',
			  data:{
				cat_id:id
			  },
			  success:function(resp){
				  if(resp == 200){
					swal("Deleted", "Category Deleted", "success")
					.then((value) => {
						if (value) {
							$('#add_category').load('ajax/addCategory.php');
							$('#view_category').load('ajax/viewCategory.php');
						}
					});
				  }else if(resp==400){
					swal("Error", "Category already using", "error");
				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
							$('#add_category').modal('hide');
							window.location.reload();
						}
					});
                     console.log(resp);
				  }
			  }
		  });
			}

			function OpenEditCategory(id){
                // $('#showEdit').modal('show');
				
				$('#add_category').load('ajax/editCategory.php',{cat_id:id});
				$('#view_category').load('ajax/viewCategory.php');
            }

			function OpenEditSubCategory(id,cat_id){
				alert(id)
				
				$('#add_subcategory').load('ajax/editSubCategory.php',{sub_cat_id:id});
				// $('#view_category').load('ajax/viewSubCat.php',{cat_id:cat_id});
            }

			function editCategory(id){

				var catName = document.getElementById('catName').value;
			
				$.ajax({
			  url:'backend/editCategory.php',
			  method:'POST',
			  data:{
				cat_id:id,
				catName:catName

			  },
			  success:function(resp){
				  if(resp == 200){
					swal("Edited", "Category Edited", "success")
					.then((value) => {
						if (value) {
							$('#add_category').load('ajax/addCategory.php');
							$('#view_category').load('ajax/viewCategory.php');
						}
					});
				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
							$('#add_category').modal('hide');
							window.location.reload();
						}
					});
                     console.log(resp);
				  }
			  }
		  });
			}

			function editSubCategory(id){

					var catName = document.getElementById('catName').value;
					var category = document.getElementById('category').value;

					$.ajax({
					url:'backend/editSubCategory.php',
					method:'POST',
					data:{
					sub_cat_id:id,
					catName:catName,
					category:category

					},
					success:function(resp){
					if(resp == 200){
						swal("Edited", "Sub Category Edited", "success")
						.then((value) => {
							if (value) {
								$('#add_subcategory').load('ajax/addSubCat.php');
								$('#view_subcategory').load('ajax/viewSubCat.php');
							}
						});
					}
					else {
						swal("Cancelled", "Something went wrong", "error")
						.then((value) => {
							if (value) {
								$('#showSub').modal('hide');
								window.location.reload();
							}
						});
						console.log(resp);
					}
					}
					});
					}

			function deleteSubCat(id,cat_id){
				alert(id)
				$.ajax({
			  url:'backend/deleteSubCategory.php',
			  method:'POST',
			  data:{
				sub_cat_id:id
			  },
			  success:function(resp){
				  if(resp == 200){
					swal("Deleted", "Sub Category Deleted", "success")
					.then((value) => {
						if (value) {
							$('#add_subcategory').load('ajax/addSubCat.php');
							$('#view_subcategory').load('ajax/viewSubCat.php',{cat_id:cat_id});
						}
					});
				  }else if(resp==400){
					swal("Error", "Category already using", "error");
				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
							$('#showSub').modal('hide');
							window.location.reload();
						}
					});
                     console.log(resp);
				  }
			  }
		  });
			}
			

	  	
	  
 </script>