<?php 
include "../backend/conn.php";

$sc_id=$_REQUEST['sc_id'];

$sqlServiceCenter="SELECT * FROM tbl_service_center WHERE sc_id='$sc_id'";
$rsServiceCenter=$conn->query($sqlServiceCenter);
$rowsServiceCenter=$rsServiceCenter->fetch_assoc();

?>
							
				<div class="row" id="user-profile">
					<div class="col-lg-12">
								<div class="modal-header modal-header-primary">
									<h3><i class="fa fa-pencil m-r-5"></i> Edit Service Center</h3>
									<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<form  method="post" enctype="multipart/form-data">
										<div class="form-group">
										<label for="name">Service Station Name</label>
										<input type="text" name="name" id="name" class="form-control" placeholder="Enter service station name" value="<?= $rowsServiceCenter['s_name'] ?>" required>
									</div>

									<div class="form-group">
										<label for="address">Address</label>
										<input type="text" name="address" id="address" class="form-control" placeholder="Enter service station address" value="<?= $rowsServiceCenter['s_location'] ?>" required>
									</div>
									<div class="form-group">
										<label for="phoneno">Phone no</label>
										<input type="text" name="phoneno" id="phoneno" class="form-control" placeholder="Enter service station phone no" value="<?= $rowsServiceCenter['s_phone_number'] ?>" required>
									</div>
									<div class="form-group">
										<label for="province">Provice</label>
										<input type="text" name="province" id="province" class="form-control" placeholder="Enter service station address" value="<?= $rowsServiceCenter['s_province'] ?>" required>
									</div>
									<div class="form-group">
										<label for="district">District</label>
										<input type="text" name="district" id="district" class="form-control" placeholder="Enter service station address" value="<?= $rowsServiceCenter['s_district'] ?>" required>
									</div>

									<div class="form-group">
										<label for="hdesc">City</label>
										<input type="text" name="city" id="city" class="form-control" placeholder="Enter service station address" value="<?= $rowsServiceCenter['s_city'] ?>" required>
									</div>

									<div class="form-group">
										<label for="logo">Logo</label>
										<input type="file" name="logo" id="logo" class="form-control" placeholder="Enter logo URL" value="<?= $rowsServiceCenter['s_logo'] ?>" required>
									</div>

									<div class="form-group">
										<label for="banner">Banner</label>
										<input type="file" name="banner" id="banner" class="form-control" placeholder="Enter banner image URL" value="<?= $rowsServiceCenter['s_banner'] ?>" required>
									</div>
									<div class="form-group">
										<label for="sabout">About Service station</label>
										<textarea name="sabout" id="sabout" class="form-control" rows="3" placeholder="Enter service station description" value="<?= $rowsServiceCenter['s_desc'] ?>" required></textarea>
									</div>

											<button type="button" onclick="editHotel()" class="btn btn-primary">update</button>
										</form>

									</div>
								</div>
						</div>
				</div>