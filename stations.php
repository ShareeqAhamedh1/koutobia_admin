<?php include "layout/header.php"; 

?>

		<!--APP-CONTENT START-->
		<div class="main-content app-content">
			<div class="container-fluid">

				<!-- Page Header -->
				<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
					<!-- Button Group for Adding Icons -->
					<div class="ms-auto pageheader-btn">
						<button type="button" onclick="openModelAddIcons()" class="btn btn-primary btn-wave waves-effect waves-light me-2">
							<i class="fe fe-plus mx-1 align-middle"></i>Add Icon
						</button>
					</div>

					<!-- Button Group for Adding Facilities -->
					<div class="ms-auto pageheader-btn">
						<button type="button" onclick="openModelAddFacilities()" class="btn btn-primary btn-wave waves-effect waves-light me-2">
							<i class="fe fe-plus mx-1 align-middle"></i>Add Facilities
						</button>
					</div>
				</div>
				<!-- Page Header Close -->


				<!-- ROW-1 OPEN -->
				
						<div class="row" id="user-profile">
                            
                        <?php 
                                        $sqlServiceCenter="SELECT * FROM tbl_service_center";
                                        $rsServiceCenter=$conn->query($sqlServiceCenter);
                                        if($rsServiceCenter->num_rows>0){
                                           while($rowsServiceCenter=$rsServiceCenter->fetch_assoc()){
                                            ?>

                                            
                                        
							<div class="col-lg-12">

                            
								<div class="card custom-card">
									<div class="card-body position-relative">
										<div class="col-lg-8 col-md-8 col-sm-8 col-xl-8">
											<div class="d-flex btn-list">
												<!-- First Button -->
												<a class="btn btn-icon btn-warning btn-wave waves-effect waves-light me-2"
													onclick="openEditStationModel()" 
													data-bs-toggle="tooltip" 
													data-bs-original-title="Edit Station">
													<i class="ri-file-edit-line"></i>
												</a>

												<!-- Second Button (conditionally displayed) -->
											
														<!-- <a class="btn btn-icon btn-warning btn-wave waves-effect waves-light"
															onclick="openViewHotelPublishModal()" 
															data-bs-toggle="tooltip" 
															data-bs-original-title="Publish Hotel">
															<i class="ri-file-warning-line"></i>
														</a> -->
													
														<!-- <a class="btn btn-success btn-wave waves-effect waves-light"
													data-bs-toggle="tooltip" 
													data-bs-original-title="Published">
													Published
													</a> -->
														<!-- <a class="btn btn-danger btn-wave waves-effect waves-light"
													data-bs-toggle="tooltip" 
													onclick="openViewHotelPublishModalReject()"
													data-bs-original-title="Reject">
													Reject
													</a> -->
														<!-- <a class="btn btn-danger btn-wave waves-effect waves-light"
													data-bs-toggle="tooltip" 
													data-bs-original-title="Rejected">
													Rejected
													</a> -->

													<!-- <a class="btn btn-success btn-wave waves-effect waves-light"
													data-bs-toggle="tooltip" 
													onclick="openViewHotelPublishModal()"
													data-bs-original-title="Publish">
													Publish
													</a> -->
													
											</div>

											    <div class="card custom-card overflow-hidden">
													<div class="card-body">
														<div class="row align-items-center"> <!-- Align items vertically centered -->
															<div class="col-lg-2 d-flex justify-content-center"> <!-- Center the icon within its column -->
																<div class="counter-icon bg-success-gradient box-shadow-success rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
																	<img src="assets/img/logo/<?= $rowsServiceCenter['s_logo']; ?>" style="width: 60px; height: 60px; alt=">
																
                                                                </div>
															</div>
															<div class="col-lg-10 justify-content-center">
																<h3 class="number-font mb-1"><?= $rowsServiceCenter['s_name']; ?></h3>
																<h5 class="text-muted mb-0"><?= $rowsServiceCenter['s_location']; ?></h5>
                                                                <h5 class="text-muted mb-0"><?= $rowsServiceCenter['s_phone_number']; ?></h5>
																<p><?= $rowsServiceCenter['s_desc']; ?></p>
															</div>
														</div>
													</div>
												</div>

												
										</div>
									</div>

                                        
								</div>
							</div>

                            <?php
                                           }
                                        }
                                        ?>
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

		<?php include("layout/footer.php"); ?>

		<script>
			

			function openEditStationModel(){
                alert();
				// $('#editModal').modal('show');
				// // $('#load_edit_data').load('ajax/editStation.php',{ sc_id:id });
				// $('#load_data').empty();
			}

			

	// 		function editHotel(){
          
    //        	 var hname = document.getElementById('hname').value;
    //          var hdesc = document.getElementById('hdesc').value;
    //          var htimg = document.getElementsByName('htimg')[0].value;
    //          var htsimg = document.getElementById('htsimg').value;
    //          var habout = document.getElementById('habout').value;
	// 		 var haddress =document.getElementById('haddress').value;
	// 		 var hid=document.getElementById('h_id').value;
			
          
    //          $.ajax({
    //            url:'backend/edit_hotel.php',
    //            method:'POST',
    //            data:{
    //             hname:hname,
	// 			hdesc:hdesc,
	// 			htimg:htimg,
	// 			htsimg:htsimg,
	// 			habout:habout,
	// 			haddress:haddress,
	// 			hid:hid
    //            },
    //            success:function(resp){
    //                if(resp == 200){
	// 				swal("Changed", "Hotel Information Changed", "success")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#editModal').modal('hide');
	// 						window.location.reload();
	// 					}
	// 				});
    //                }
    //                else {
	// 				swal("Cancelled", "Something went wrong", "error")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#editModal').modal('hide');
	// 						window.location.reload();
	// 					}
	// 				});
    //                  console.log(resp);
	// 				}
    //            }
    //          });
    //      }

	// 	 function addRoom(){
          
	// 		var guest = document.getElementById('guest').value;
	// 		var btype = document.getElementById('btype').value;
	// 		var rtype = document.getElementById('rtype').value;
	// 	  var rabout = document.getElementById('rabout').value;
	// 	  var  rsize=document.getElementById('rsize').value;
	// 	  var hid=document.getElementById('h_id').value;
		  
		  
	// 	  $.ajax({
	// 		  url:'backend/add_room.php',
	// 		  method:'POST',
	// 		  data:{
	// 			guest:guest,
	// 			btype:btype,
	// 			rtype:rtype,
	// 			  rabout:rabout,
	// 			  rsize:rsize,
	// 		  hid:hid
	// 		  },
	// 		  success:function(resp){
	// 			  if(resp == 200){
	// 				swal("Added", "Room added", "success")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#load_edit_data').load('ajax/addRooms.php',{ h_id:hid });
	// 						$('#load_data').load('ajax_added_items/room.php',{ h_id:hid });
	// 					}
	// 				});
	// 			  }
	// 			  else {
	// 				swal("Cancelled", "Something went wrong", "error")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#editModal').modal('hide');
	// 						window.location.reload();
	// 					}
	// 				});
    //                  console.log(resp);
	// 			  }
	// 		  }
	// 	  });
	//   }

	//   function addIcon(){
          
			
	// 	  var iname = document.getElementById('iname').value;
	// 	  var icimage = document.getElementById('icimage').files[0]
	// 	//   var  icimage=document.getElementByName('icimage')[0].value;
		
	// 	var formData = new FormData();
	// 	formData.append('iname', iname);
	// 	if (icimage) formData.append('icimage', icimage);
	// 	  $.ajax({
	// 		  url:'backend/add_icon.php',
	// 		  method:'POST',
	// 		  data: formData,
	// 		  processData: false, // Prevent jQuery from converting the data into a query string
	// 		  contentType: false, 
	// 		  success:function(resp){
	// 			  if(resp == 200){
	// 				swal("Added", "Icon Added", "success")
	// 				.then((value) => {
	// 					if (value) {
							
	// 						$('#load_edit_data').load('ajax/addIcons.php');
	// 						$('#load_data').load('ajax_added_items/icon.php');
	// 					}
	// 				});
	// 			  }
	// 			  else {
	// 				swal("Cancelled", "Something went wrong", "error")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#editModal').modal('hide');
	// 						window.location.reload();
	// 					}
	// 				});
    //                  console.log(resp);
	// 			  }
	// 		  }
	// 	  });
	//   }

	//   function addFacility(){
          
			
	// 	  var fname = document.getElementById('fname').value;
	// 	//   var  icimage=document.getElementByName('icimage')[0].value;

		  
		
	// 	  $.ajax({
	// 		  url:'backend/add_facility.php',
	// 		  method:'POST',
	// 		  data:{
	// 			fname:fname,
		
	// 		  },
	// 		  success:function(resp){
	// 			  if(resp == 200){
	// 				swal("Added", "Facility Added", "success")
	// 				.then((value) => {
	// 					if (value) {
							
	// 						$('#load_edit_data').load('ajax/addFacilities.php');
	// 						$('#load_data').load('ajax_added_items/facility.php');
	// 					}
	// 				});
	// 			  }
	// 			  else {
	// 				swal("Cancelled", "Something went wrong", "error")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#editModal').modal('hide');
	// 						window.location.reload();
	// 					}
	// 				});
    //                  console.log(resp);
	// 			  }
	// 		  }
	// 	  });
	//   }

	//   function addAmenity(){
          
			
	// 	//   var aname = document.getElementById('aname').value;
	// 	  var iconSelect = document.getElementById('iconSelect').value;
		
	// 	  var hid=document.getElementById('h_id').value;
		  
		  
	// 	  $.ajax({
	// 		  url:'backend/add_amenity.php',
	// 		  method:'POST',
	// 		  data:{
	// 			// aname:aname,
	// 			iconSelect:iconSelect,
	// 		  hid:hid
	// 		  },
	// 		  success:function(resp){
	// 			  if(resp == 200){
	// 				swal("Added", "Amenity Added", "success")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#load_edit_data').load('ajax/addAmenities.php',{ h_id:hid });
	// 						$('#load_data').load('ajax_added_items/amenitiy.php',{ h_id:hid });
							
	// 					}
	// 				});
				  
	// 			  }else if(resp==300){
	// 				swal("Warning", "Amenity Already Added", "warning")
	// 				.then((value) => {
	// 					if (value) {
	// 						// $('#editModal').modal('hide');
	// 						// window.location.reload();
	// 					}
	// 				});
	// 			  }
	// 			  else {
	// 				swal("Cancelled", "Something went wrong", "error")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#editModal').modal('hide');
	// 						window.location.reload();
	// 					}
	// 				});
    //                  console.log(resp);
	// 			  }
	// 		  }
	// 	  });
	//   }

	//   function deleteIcon(id){
	// 	var ic_id=id;

	// 	$.ajax({
	// 		url:'backend/deleteIcon.php',
	// 		method:'POST',
	// 		data:{
	// 			ic_id:ic_id
	// 		},success:function(resp){
	// 			if(resp == 200){
	// 				swal("Deleted", "Icon Deleted", "success")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#load_edit_data').load('ajax/addIcons.php');
	// 						$('#load_data').load('ajax_added_items/icon.php');
	// 					}
	// 				});
	// 			  }else if(resp==400){
	// 				swal("Error", "Icon already using", "error");
	// 			  }
	// 			  else {
	// 				swal("Cancelled", "Something went wrong", "error")
	// 				.then((value) => {
	// 					if (value) {
	// 					}
	// 				});
    //                  console.log(resp);
	// 			  }

	// 		}

	// 	})
	//   }


	//   function deleteFac(id){
	// 	var fac_id=id;

	// 	$.ajax({
	// 		url:'backend/deleteFacility.php',
	// 		method:'POST',
	// 		data:{
	// 			fac_id:fac_id
	// 		},success:function(resp){
	// 			if(resp == 200){
	// 				swal("Deleted", "Icon Deleted", "success")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#load_edit_data').load('ajax/addFacilities.php');
	// 						$('#load_data').load('ajax_added_items/facility.php');
	// 					}
	// 				});
	// 			  }else if(resp==400){
	// 				swal("Error", "Icon already using", "error");
	// 			  }
	// 			  else {
	// 				swal("Cancelled", "Something went wrong", "error")
	// 				.then((value) => {
	// 					if (value) {
	// 					}
	// 				});
    //                  console.log(resp);
	// 			  }

	// 		}

	// 	})
	//   }

	//   function deleteIconAmm(id,h_id){
	// 	var ic_id=id;
	// 	var h_id=h_id;
	// 	$.ajax({
	// 		url:'backend/deleteIconAmm.php',
	// 		method:'POST',
	// 		data:{
	// 			ic_id:ic_id
	// 		},success:function(resp){
	// 			if(resp == 200){
	// 				swal("Deleted", "Aminity Deleted", "success")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#load_edit_data').load('ajax/addAmenities.php',{ h_id:h_id });
	// 						$('#load_data').load('ajax_added_items/amenitiy.php',{ h_id:h_id });
	// 					}
	// 				});
	// 			  }
	// 			  else {
	// 				swal("Cancelled", "Something went wrong", "error")
	// 				.then((value) => {
	// 					if (value) {
	// 					}
	// 				});
    //                  console.log(resp);
	// 			  }

	// 		}

	// 	})
	//   }

	//   function deleteRoom(id,h_id){
	// 	var r_id=id;
	// 	var h_id=h_id;
		
	// 	$.ajax({
	// 		url:'backend/deleteRoom.php',
	// 		method:'POST',
	// 		data:{
	// 			r_id:r_id
	// 		},success:function(resp){
	// 			if(resp == 200){
	// 				swal("Deleted", "Aminity Deleted", "success")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#load_edit_data').load('ajax/addRooms.php',{ h_id:h_id });
	// 						$('#load_data').load('ajax_added_items/room.php',{ h_id:h_id });
	// 					}
	// 				});
	// 			  }
	// 			  else {
	// 				swal("Cancelled", "Something went wrong", "error")
	// 				.then((value) => {
	// 					if (value) {
	// 					}
	// 				});
    //                  console.log(resp);
	// 			  }

	// 		}

	// 	});
	//   }


	//   function approveEdit(id,status){
	// 			$.ajax({
	// 				url:'backend/approve_edit.php',
	// 				method:'POST',
	// 				data:{
	// 					h_e_id:id,
	// 					status_code:status
	// 				},success:function(resp){
	// 					// alert(resp);
	// 					if(resp==200){
	// 							swal("Changed", "Approved the request","success")
	// 							.then((value) => {
	// 							if (value) {
	// 								$('#editModal').modal('hide');
	// 								window.location.reload();
	// 							}
	// 						});
	// 					} else if(resp==201){
	// 						swal("Rejected", "Rejected the request","error")
	// 							.then((value) => {
	// 							if (value) {
	// 								$('#editModal').modal('hide');
	// 								window.location.reload();
	// 							}
	// 						});
	// 					} else {
	// 				swal("Cancelled", "Something went wrong", "error")
	// 				.then((value) => {
	// 					if (value) {
	// 						$('#editModal').modal('hide');
	// 						window.location.reload();
	// 					}
	// 				});
    //                  console.log(resp);
	// 				}
	// 				}
	// 			})


	// 			}

	// 											function openViewHotelPublishModal(h_id) {
	// 												swal({
	// 													title: "Are you sure?",
	// 													text: "Do you want to approve the request?",
	// 													icon: "warning",
	// 													buttons: {
	// 														cancel: {
	// 															text: "No",
	// 															value: false,
	// 															visible: true,
	// 															className: "btn-danger",
	// 															closeModal: true
	// 														},
	// 														confirm: {
	// 															text: "Yes",
	// 															value: true,
	// 															visible: true,
	// 															className: "btn-success",
	// 															closeModal: true
	// 														}
	// 													},
	// 													dangerMode: true,
	// 												}).then((value) => {
	// 													// Check whether the user clicked Yes or No
	// 													let status = value ? "yes" : "no"; // If true (Yes), else (No)

	// 													// Proceed only if a valid ID is provided
	// 													if (h_id) {
	// 														// Make an AJAX call to update the database based on user's choice
	// 														$.ajax({
	// 															url: "backend/approve_publish.php", // URL of your backend file
	// 															type: "POST",       // Use POST method to send the data securely
	// 															data: {
	// 																h_id: h_id,   // ID of the request or item to update
	// 																status: status   // Yes or No status
	// 															},
	// 															success: function(resp) {
	// 																// Handle the response from the server
	// 																if (resp == 200) {
	// 																	swal("Approved", "Request has been approved", "success")
	// 																		.then(() => {
	// 																			$('#editModal').modal('hide');
	// 																			window.location.reload(); // Reload the page
	// 																		});
	// 																} else if (resp == 201) {
	// 																	swal("Rejected", "Request has been rejected", "error")
	// 																		.then(() => {
	// 																			$('#editModal').modal('hide');
	// 																			window.location.reload(); // Reload the page
	// 																		});
	// 																} else {
	// 																	swal("Cancelled", "Something went wrong", "error")
	// 																		.then(() => {
	// 																			$('#editModal').modal('hide');
	// 																			window.location.reload(); // Reload the page
	// 																		});
	// 																	console.log(resp); // Log the unexpected response for debugging
	// 																}
	// 															},
	// 															error: function(error) {
	// 																swal("Error", "Could not update the request status", "error");
	// 															}
	// 														});
	// 													} else {
	// 														swal("Error", "Invalid hotel ID", "error");
	// 													}
	// 												});
	// 											}

	// 											function openViewHotelPublishModalReject(h_id) {
	// 												swal({
	// 													title: "Are you sure?",
	// 													text: "Do you want to Reject?",
	// 													icon: "warning",
	// 													buttons: {
	// 														cancel: {
	// 															text: "No",
	// 															value: false,
	// 															visible: true,
	// 															className: "btn-danger",
	// 															closeModal: true
	// 														},
	// 														confirm: {
	// 															text: "Yes",
	// 															value: true,
	// 															visible: true,
	// 															className: "btn-success",
	// 															closeModal: true
	// 														}
	// 													},
	// 													dangerMode: true,
	// 												}).then((value) => {
	// 													// Check whether the user clicked Yes or No
	// 													let status = value ? "yes" : "no"; // If true (Yes), else (No)

	// 													// Proceed only if a valid ID is provided
	// 													if (h_id) {
	// 														// Make an AJAX call to update the database based on user's choice
	// 														$.ajax({
	// 															url: "backend/approve_publish_reject.php", // URL of your backend file
	// 															type: "POST",       // Use POST method to send the data securely
	// 															data: {
	// 																h_id: h_id,   // ID of the request or item to update
	// 																status: status   // Yes or No status
	// 															},
	// 															success: function(resp) {
	// 																// Handle the response from the server
	// 																if (resp == 200) {
	// 																	swal("Rejected", "Hotel has been rejected", "success")
	// 																		.then(() => {
	// 																			$('#editModal').modal('hide');
	// 																			window.location.reload(); // Reload the page
	// 																		});
	// 																} else if (resp == 201) {
	// 																	swal("Not Rejected", "Request has been rejected", "error")
	// 																		.then(() => {
	// 																			$('#editModal').modal('hide');
	// 																			window.location.reload(); // Reload the page
	// 																		});
	// 																} else {
	// 																	swal("Cancelled", "Something went wrong", "error")
	// 																		.then(() => {
	// 																			$('#editModal').modal('hide');
	// 																			window.location.reload(); // Reload the page
	// 																		});
	// 																	console.log(resp); // Log the unexpected response for debugging
	// 																}
	// 															},
	// 															error: function(error) {
	// 																swal("Error", "Could not update the request status", "error");
	// 															}
	// 														});
	// 													} else {
	// 														swal("Error", "Invalid hotel ID", "error");
	// 													}
	// 												});
	// 											}

												

		</script>