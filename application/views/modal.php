<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center><h4 class="modal-title" id="myModalLabel">Add New Employes</h4></center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form id="addForm">
						<div class="row">
							<div class="col-md-3">
								<label class="control-label" style="position:relative; top:7px;">Username:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="username" required>
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-md-3">
								<label class="control-label" style="position:relative; top:7px;">Full Name:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="full_name" required>
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-md-3">
								<label class="control-label" style="position:relative; top:7px;">ID Card:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="id_card" required>
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-md-3">
								<label class="control-label" style="position:relative; top:7px;">Divisi:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="division" required>
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-md-3">
								<label class="control-label" style="position:relative; top:7px;">Address:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="address" required>
							</div>
						</div>
					</div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
					</form>
				</div>

			</div>
		</div>
	</div>

	<!-- Edit -->
	<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<center><h4 class="modal-title" id="myModalLabel">Edit Employes</h4></center>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<form id="editForm">
							<div class="row">
								<div class="col-md-3">
									<label class="control-label" style="position:relative; top:7px;">Username:</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="username" id="username">
								</div>
							</div>
							<div style="height:10px;"></div>
							<div class="row">
								<div class="col-md-3">
									<label class="control-label" style="position:relative; top:7px;">Full Name:</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="full_name" id="full_name">
								</div>
							</div>
							<div style="height:10px;"></div>
							<div class="row">
								<div class="col-md-3">
									<label class="control-label" style="position:relative; top:7px;">ID Card:</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="id_card" id="id_card">
								</div>
							</div>
							<div style="height:10px;"></div>
							<div class="row">
								<div class="col-md-3">
									<label class="control-label" style="position:relative; top:7px;">Divisi:</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="division" id="division">
								</div>
							</div>
							<div style="height:10px;"></div>
							<div class="row">
								<div class="col-md-3">
									<label class="control-label" style="position:relative; top:7px;">Address:</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="address" id="address">
								</div>
							</div>
							<input type="hidden" name="id" id="employeid">
						</div> 
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
						<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Update</a>
						</form>
					</div>

				</div>
			</div>
		</div>

		<!-- Delete -->
		<div class="modal fade" id="delmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<center><h4 class="modal-title" id="myModalLabel">Delete Employe</h4></center>
					</div>
					<div class="modal-body">
						<h4 class="text-center">Are you sure you want to delete</h4>
						<h2 id="delfull_name" class="text-center"></h2>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
						<button type="button" id="delid" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</button>
					</div>

				</div>
			</div>
		</div>
