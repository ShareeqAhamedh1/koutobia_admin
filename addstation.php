<?php include "layout/header.php"; 
$s_a_id=$_SESSION['s_a_id'];
?>

		<!--APP-CONTENT START-->
		<div class="main-content app-content">
			<div class="container-fluid">

				<!-- Page Header -->
				<!-- <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
					
					<div class="ms-auto pageheader-btn">
						<button type="button" onclick="openModelAddIcons()" class="btn btn-primary btn-wave waves-effect waves-light me-2">
							<i class="fe fe-plus mx-1 align-middle"></i>Add Icon
						</button>
					</div>

					
					<div class="ms-auto pageheader-btn">
						<button type="button" onclick="openModelAddFacilities()" class="btn btn-primary btn-wave waves-effect waves-light me-2">
							<i class="fe fe-plus mx-1 align-middle"></i>Add Facilities
						</button>
					</div>
				</div> -->
				<!-- Page Header Close -->


				<!-- ROW-1 OPEN -->
				
							<!-- <div class="row" id="user-profile">
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="card-body position-relative">
											<a onclick="openEditModel()" class="btn btn-icon btn-primary btn-wave waves-effect waves-light position-absolute top-0 end-0 m-2"
											data-bs-toggle="tooltip" data-bs-original-title="Edit">
												<i class="ri-pencil-fill lh-1"></i>
											</a>

											<div class="col-lg-8 col-md-8 col-sm-8 col-xl-8">
											<div class="btn-list">
													<a  onclick="openAddMoreImagesModel()" class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
													data-bs-toggle="tooltip" data-bs-original-title="Add More Images">
													<i class="ri-camera-switch-fill"></i>
													</a>

													<a onclick="openModelAddRooms()" class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
													data-bs-toggle="tooltip" data-bs-original-title="Add Rooms">
														<i class="ri-home-5-line"></i>
													</a>

													<a onclick="openModelAddAmenities()" class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
													data-bs-toggle="tooltip" data-bs-original-title="Add Amenities">
													<i class="ri-open-arm-line"></i>
													</a>
												</div>
												<div class="card custom-card overflow-hidden">
													<div class="card-body">
														<div class="row align-items-center"> 
															<div class="col-lg-2 d-flex justify-content-center"> 
																<div class="counter-icon bg-success-gradient box-shadow-success rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
																	<img src="assets/img/small_img/" style="width: 60px; height: 60px; alt=">
																</div>
															</div>
															<div class="col-lg-10 justify-content-center">
																<h3 class="number-font mb-1"></h3>
																<h5 class="text-muted mb-0"></h5>
																<p></p>
															</div>
														</div>
													</div>
												</div>

												<div class="btn-list">

												<?php 
												// $publish_status = $rowsHotel['publish_status'];
												// $hotel_id = $rowsHotel['h_id'];

												// if($publish_status == 0) {
													// Hotel is not yet published
													?>
													<a class="btn btn-success btn-wave waves-effect waves-light"
													onclick="publish(, 1)" 
													data-bs-toggle="tooltip" 
													data-bs-original-title="Publish">
													Publish
													</a>
													<?php
												// } else if ($publish_status == 1) {
													// Hotel is pending approval
													?>
													<a class="btn btn-success btn-wave waves-effect waves-light"
													data-bs-toggle="tooltip" 
													data-bs-original-title="Pending">
													Pending
													</a>
													<a class="btn btn-danger btn-wave waves-effect waves-light"
													onclick="publish(, 3)" 
													data-bs-toggle="tooltip" 
													data-bs-original-title="Reject">
													Reject
													</a>
													<?php
												// } else if ($publish_status == 2) {
													// Hotel is published
													?>
													<a class="btn btn-success btn-wave waves-effect waves-light"
													data-bs-toggle="tooltip" 
													data-bs-original-title="Published">
													Published
													</a>
													
													<?php
												// } else if ($publish_status == 3) {
													// Hotel is rejected
													?>

													<a class="btn btn-success btn-wave waves-effect waves-light"
													onclick="publish(,1)" 
													data-bs-toggle="tooltip" 
													data-bs-original-title="Publish">
													Publish
													</a>
													<a class="btn btn-danger btn-wave waves-effect waves-light"
													data-bs-toggle="tooltip" 
													data-bs-original-title="Rejected">
													Rejected
													</a>
													<?php
												// }
												?>
												
                                                        
												</div>

												
											</div>
										</div>
									</div>
								</div>
							</div> -->



						
					<div class="row" id="user-profile">
					<div class="col-lg-12">
						<div class="card custom-card">
							<div class="card-body">

							<?php 
										if(isset($_SESSION['station_added_success'])){

											?>
											<div class="alert alert-success" role="alert">
												Service Station Added
											</div>
											<?php
											unset($_SESSION['station_added_success']);
										}
										?>

<?php 
										if(isset($_SESSION['station_added_error'])){

											?>
											<div class="alert alert-danger" role="alert">
												Something went wrong, please contact the Developer..
											</div>
											<?php
											unset($_SESSION['station_added_error']);
										}
										?>


								<form action="backend/addStation.php"  method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="name">Service Station Name</label>
										<input type="text" name="name" id="name" class="form-control" placeholder="Enter service station name" required>
									</div>

									<div class="form-group">
										<label for="address">Address</label>
										<input type="text" name="address" id="address" class="form-control" placeholder="Enter service station address" required>
									</div>
									<div class="form-group">
										<label for="phoneno">Phone no</label>
										<input type="text" name="phoneno" id="phoneno" class="form-control" placeholder="Enter service station address" required>
									</div>
									<div class="form-group">
										<label for="province">Provice</label>
										<input type="text" name="province" id="province" class="form-control" placeholder="Enter service station address" required>
									</div>
									<div class="form-group">
										<label for="district">District</label>
										<input type="text" name="district" id="district" class="form-control" placeholder="Enter service station address" required>
									</div>

									<div class="form-group">
										<label for="hdesc">City</label>
										<input type="text" name="city" id="city" class="form-control" placeholder="Enter service station address" required>
									</div>

									<div class="form-group">
										<label for="logo">Logo</label>
										<input type="file" name="logo" id="logo" class="form-control" placeholder="Enter logo URL" required>
									</div>

									<div class="form-group">
										<label for="banner">Banner</label>
										<input type="file" name="banner" id="banner" class="form-control" placeholder="Enter banner image URL" required>
									</div>
									<div class="form-group">
										<label for="sabout">About Service station</label>
										<textarea name="sabout" id="sabout" class="form-control" rows="3" placeholder="Enter service station description" required></textarea>
									</div>

									<button type="submit" class="btn btn-primary">Submit</button>
								</form>

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

		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					
					<div class="modal-body ">
						<div class="row">
							<div class="col-lg-6" id="load_edit_data">
								<!-- Dynamic content for editing will be loaded here -->
							</div>
							<div class="col-lg-6" id="load_data">
								<!-- Additional dynamic content will be loaded here -->
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
					<div class="modal-header">
						<h5 class="modal-title">Edit Details</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-12 mb-3" id="load_data_view">
								<!-- Additional dynamic content will be loaded here -->
							</div>
							<div class="col-lg-12" id="load_added_data_view">
								<!-- Additional dynamic content will be loaded here -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<?php include("layout/footer.php"); ?>

		<script>
			

			function openEditModel(id){
				$('#editModal').modal('show');
				$('#load_edit_data').load('ajax/editHotels.php',{ h_id:id });
				$('#load_data').empty();
			}

			function openModelAddRooms(id){
				$('#editModal').modal('show');
				$('#load_edit_data').load('ajax/addRooms.php',{ h_id:id });
				$('#load_data').load('ajax_added_items/room.php',{ h_id:id });
			}

			function openModelAddAmenities(id){
				$('#editModal').modal('show');
				$('#load_edit_data').load('ajax/addAmenities.php',{ h_id:id });
				$('#load_data').load('ajax_added_items/amenitiy.php',{ h_id:id });
				
			}

			function openModelAddIcons(id){
				
				$('#editModal').modal('show');
				$('#load_edit_data').load('ajax/addIcons.php',{ h_id:id });
				$('#load_data').load('ajax_added_items/icon.php',{ h_id:id });
			}

			function openModelAddFacilities(id){
				
				$('#editModal').modal('show');
				$('#load_edit_data').load('ajax/addFacilities.php',{ h_id:id });
				$('#load_data').load('ajax_added_items/facility.php',{ h_id:id });
			}

			function openAddFacilityRoomModal(r_id,h_id){
				$('#showEdit').modal('show');
				$('#load_data_view').load('ajax/addFacilities.php',{ h_id:h_id,r_id:r_id });
				$('#load_added_data_view').load('ajax_added_items/facility.php',{  h_id:h_id,r_id:r_id });
				
				// $('#load_data').load('ajax_added_items/facility.php',{ h_id:id });

			}	

			function openAddMoreImagesModel(id){
				$('#editModal').modal('show');
				$('#load_edit_data').load('ajax/addMoreimages.php',{ h_id:id });
				$('#load_data').load('ajax_added_items/moreImages.php',{ h_id:id });
			}

			

			function editHotel() {
				var hname = document.getElementById('hname').value;
				var hdesc = document.getElementById('hdesc').value;
				var htimg = document.getElementById('htimg').files[0]; // Get the first selected file
				var htsimg = document.getElementById('htsimg').files[0]; // Get the first selected file
				var habout = document.getElementById('habout').value;
				var haddress = document.getElementById('haddress').value;
				var hid = document.getElementById('h_id').value;

				// Create FormData object
				var formData = new FormData();
				formData.append('hname', hname);
				formData.append('hdesc', hdesc);
				if (htimg) formData.append('htimg', htimg); // Append image if available
				if (htsimg) formData.append('htsimg', htsimg); // Append image if available
				formData.append('habout', habout);
				formData.append('haddress', haddress);
				formData.append('hid', hid);

				$.ajax({
					url: 'backend/edit_hotel.php',
					method: 'POST',
					data: formData,
					processData: false, // Prevent jQuery from converting the data into a query string
					contentType: false, // Prevent jQuery from setting the content type
					success: function(resp) {
						if (resp == 200) {
							swal("Changed", "Hotel Information Changed, Wait until admin approves", "success")
								.then((value) => {
									if (value) {
										$('#editModal').modal('hide');
										window.location.reload();
									}
								});
						} else if (resp == 201) {
							swal("Warning", "Last update on process", "warning")
								.then((value) => {
									if (value) {
										$('#editModal').modal('hide');
										window.location.reload();
									}
								});
						} else {
							swal("Cancelled", "Something went wrong", "error")
								.then((value) => {
									if (value) {
										$('#editModal').modal('hide');
										window.location.reload();
									}
								});
							console.log(resp);
						}
					}
				});
			}

		 function addRoom(){
          
			var guest = document.getElementById('guest').value;
			var btype = document.getElementById('btype').value;
			var rtype = document.getElementById('rtype').value;
		  var rabout = document.getElementById('rabout').value;
		  var  rsize=document.getElementById('rsize').value;
		  var hid=document.getElementById('h_id').value;
		  
		  
		  $.ajax({
			  url:'backend/add_room.php',
			  method:'POST',
			  data:{
				guest:guest,
				btype:btype,
				rtype:rtype,
				  rabout:rabout,
				  rsize:rsize,
			  hid:hid
			  },
			  success:function(resp){
				  if(resp == 200){
					swal("Added", "Room added", "success")
					.then((value) => {
						if (value) {
							$('#load_edit_data').load('ajax/addRooms.php',{ h_id:hid });
							$('#load_data').load('ajax_added_items/room.php',{ h_id:hid });
						}
					});
				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
							$('#editModal').modal('hide');
							window.location.reload();
						}
					});
                     console.log(resp);
				  }
			  }
		  });
	  }

	  function addIcon(){
          
			
		  var iname = document.getElementById('iname').value;
		//   var  icimage=document.getElementByName('icimage')[0].value;
		  var h_a_id=document.getElementById('h_a_id').value;
		  
		
		  $.ajax({
			  url:'backend/add_icon.php',
			  method:'POST',
			  data:{
				iname:iname,
				// icimage:icimage,
			  h_a_id:h_a_id
			  },
			  success:function(resp){
				  if(resp == 200){
					swal("Added", "Icon Added", "success")
					.then((value) => {
						if (value) {
							
							$('#load_edit_data').load('ajax/addIcons.php',{ h_a_id:h_a_id });
							$('#load_data').load('ajax_added_items/icon.php',{ h_a_id:h_a_id });
						}
					});
				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
							$('#editModal').modal('hide');
							window.location.reload();
						}
					});
                     console.log(resp);
				  }
			  }
		  });
	  }

	  function addMoreImages() {
					// Get the selected files from the input element
					var moreimage = document.getElementById('moreimage').files[0]
					var h_a_id = document.getElementById('h_a_id').value; 
					var h_id = document.getElementById('h_id').value; 


					// Create a new FormData object
					var formData = new FormData();

					if (moreimage) formData.append('moreimage', moreimage);

			
					// Append additional data to FormData
					formData.append('h_a_id', h_a_id);
					formData.append('h_id', h_id);

					// AJAX request to upload images
					$.ajax({
						url: 'backend/addMoreImages.php', // URL of the backend script
						method: 'POST',
						data: formData,
						processData: false, // Prevent jQuery from converting the data into a query string
						contentType: false, // Prevent jQuery from setting the content type
						success: function(resp) {
							if (resp == 200) {
									swal("Added", "Icon Added", "success")
									.then((value) => {
										if (value) {
											
											$('#load_edit_data').load('ajax/addMoreimages.php',{ h_id:h_id });
											$('#load_data').load('ajax_added_items/moreImages.php',{ h_id:h_id });
										}
									});
							} else {
								swal("Cancelled", "Something went wrong", "error")
									.then((value) => {
										if (value) {
											$('#editModal').modal('hide');
											window.location.reload();
										}
									});
								console.log(resp);
							}
						},
						error: function(xhr, status, error) {
							swal("Error", "Failed to upload images", "error");
							console.error(`Error: ${error}, Status: ${status}, XHR: ${xhr.responseText}`);
						}
					});
				}


	  function addFacility(){
          
		  var fac_id = document.getElementById('fac_id').value;
		  //   var  icimage=document.getElementByName('icimage')[0].value;
		  var h_id=document.getElementById('h_id').value;
		  var r_id=document.getElementById('r_id').value;
		
		//   var fac_id=document.getElementById('r_id').value;
		  
		
		  $.ajax({
			  url:'backend/add_facility.php',
			  method:'POST',
			  data:{
				fac_id:fac_id,
				r_id:r_id,
			  	h_id:h_id
			  },
			  success:function(resp){
				  if(resp == 200){
					swal("Added", "Facility Added", "success")
					.then((value) => {
						if (value) {
							
							$('#load_data_view').load('ajax/addFacilities.php',{ h_id:h_id,r_id:r_id });
							$('#load_added_data_view').load('ajax_added_items/facility.php',{  h_id:h_id,r_id:r_id });
						}
					});
				  } else if(resp == 201){
					swal("Warning", "Facility Already Added", "warning")
					.then((value) => {
						if (value) {
							
							$('#load_data_view').load('ajax/addFacilities.php',{ h_id:h_id,r_id:r_id });
							$('#load_added_data_view').load('ajax_added_items/facility.php',{  h_id:h_id,r_id:r_id });
						}
					});
				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
							$('#editModal').modal('hide');
							window.location.reload();
						}
					});
                     console.log(resp);
				  }
			  }
		  });
	  }

	  function addAmenity(){
          
			
		//   var aname = document.getElementById('aname').value;
		  var iconSelect = document.getElementById('iconSelect').value;
		
		  var hid=document.getElementById('h_id').value;
		  
		  
		  $.ajax({
			  url:'backend/add_amenity.php',
			  method:'POST',
			  data:{
				// aname:aname,
				iconSelect:iconSelect,
			  hid:hid
			  },
			  success:function(resp){
				  if(resp == 200){
					swal("Added", "Amenity Added", "success")
					.then((value) => {
						if (value) {
							$('#load_edit_data').load('ajax/addAmenities.php',{ h_id:hid });
							$('#load_data').load('ajax_added_items/amenitiy.php',{ h_id:hid });
							
						}
					});
				  
				  }else if(resp==300){
					swal("Warning", "Amenity Already Added", "warning")
					.then((value) => {
						if (value) {
							// $('#editModal').modal('hide');
							// window.location.reload();
						}
					});
				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
							$('#editModal').modal('hide');
							window.location.reload();
						}
					});
                     console.log(resp);
				  }
			  }
		  });
	  }

	  function deleteIcon(id){
		var ic_id=id;

		$.ajax({
			url:'backend/deleteIcon.php',
			method:'POST',
			data:{
				ic_id:ic_id
			},success:function(resp){
				if(resp == 200){
					swal("Deleted", "Icon Deleted", "success")
					.then((value) => {
						if (value) {
							$('#load_edit_data').load('ajax/addIcons.php',{ h_id:id });
							$('#load_data').load('ajax_added_items/icon.php',{ h_id:id });
						}
					});
				  }else if(resp==400){
					swal("Error", "Icon already using", "error");
				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
						}
					});
                     console.log(resp);
				  }

			}

		})
	  }


	  function deleteFacility(id){

		$.ajax({
			url:'backend/deleteFacility.php',
			method:'POST',
			data:{
				fac_id:id
			},
			  success:function(resp){
				  if(resp == 200){
					swal("Deleted", "Facility Deleted", "success")
					.then((value) => {
						if (value) {
							$('#load_data_view').load('ajax/addFacilities.php',{ h_id:h_id,r_id:r_id });
							$('#load_added_data_view').load('ajax_added_items/facility.php',{  h_id:h_id,r_id:r_id });
						}
					});
				  } 
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
							$('#showEdit').modal('hide');
							window.location.reload();
						}
					});
                     console.log(resp);
				  }
			  }

		});
	  }


	  function deleteIconMoreImg(i_id,h_id){

		$.ajax({
			url:'backend/deleteMoreImages.php',
			method:'POST',
			data:{
				i_id:i_id,
				h_id:h_id
			},
			success:function(resp){
				if(resp == 200){
					swal("Deleted", "Image Deleted", "success")
					.then((value) => {
						if (value) {
							
							$('#load_edit_data').load('ajax/addMoreimages.php',{ h_id:h_id });
											$('#load_data').load('ajax_added_items/moreImages.php',{ h_id:h_id });
						}
					});
				} 
				else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
							$('#showEdit').modal('hide');
							window.location.reload();
						}
					});
					console.log(resp);
				}
			}

		});
		}

	  function deleteIconAmm(id,h_id){
		var ic_id=id;
		var h_id=h_id;
		$.ajax({
			url:'backend/deleteIconAmm.php',
			method:'POST',
			data:{
				ic_id:ic_id,
				h_id:h_id
			},success:function(resp){
				if(resp == 200){
					swal("Deleted", "Aminity Deleted", "success")
					.then((value) => {
						if (value) {
							$('#load_edit_data').load('ajax/addAmenities.php',{ h_id:h_id });
							$('#load_data').load('ajax_added_items/amenitiy.php',{ h_id:h_id });
						}
					});
				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
						}
					});
                     console.log(resp);
				  }

			}

		})
	  }

	  function deleteRoom(r_id,h_id){
		
		$.ajax({
			url:'backend/deleteRoom.php',
			method:'POST',
			data:{
				r_id:r_id,
				h_id:h_id
			},success:function(resp){
				if(resp == 200){
					swal("Deleted", "Room Deleted", "success")
					.then((value) => {
						if (value) {
							$('#load_edit_data').load('ajax/addRooms.php',{ h_id:h_id });
							$('#load_data').load('ajax_added_items/room.php',{ h_id:h_id });
						}
					});
				  }else if(resp == 300){
					swal("Warning", "Facilities are used in room", "error")
					.then((value) => {
						if (value) {
							$('#load_edit_data').load('ajax/addRooms.php',{ h_id:h_id });
							$('#load_data').load('ajax_added_items/room.php',{ h_id:h_id });
						}
					});

				  }
				  else {
					swal("Cancelled", "Something went wrong", "error")
					.then((value) => {
						if (value) {
						}
					});
                     console.log(resp);
				  }

			}

		});
	  }

	  function publish(h_id,publish_status){
		// alert(h_id);
		// alert(publish_status)
		$.ajax({
                    url:'backend/set_publish_status.php',
                    method:'POST',
                    data:{
                        h_id:h_id,
                        publish_status:publish_status
                    },success:function(resp){
                        // alert(resp);
                        if(resp==200){
                            swal("Changed", "Published, Wait until admin aproves", "success");
                            window.location.reload();
                        }else if(resp==201){
							swal("Rejected", "Rejected", "Error");
                            window.location.reload();
						}else{
                            swal("Failed", "Status not Changed", "Error");   
                        }
                    }
                })
	  }

	  	
	  
 </script>