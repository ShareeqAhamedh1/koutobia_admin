<?php 
include "../backend/conn.php";

$h_a_id=$_SESSION['h_a_id'];
$h_id=$_REQUEST['h_id'];
?>

<div class="row" id="user-profile">
					<div class="col-lg-12">
								<div class="modal-header modal-header-primary">
									<h3><i class="fa fa-pencil m-r-5"></i> Add More Images</h3>
									<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<form  method="post" enctype="multipart/form-data">
											<div class="form-group">
												<input type="hidden" name="h_a_id" id="h_a_id" class="form-control" value="<?= $h_a_id ?>" >
                                                <input type="hidden" name="h_id" id="h_id" class="form-control" value="<?= $h_id ?>" >
											</div>

											<div class="form-group">
												<label for="haddress">Add More Images</label>
												<input type="file" name="moreimage" id="moreimage" class="form-control" placeholder="Add Image" ></input>
											</div>
											<button type="button" onclick="addMoreImages()" class="btn btn-primary">Add</button>
										</form>

									</div>
								</div>
						</div>
				</div>