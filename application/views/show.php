<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Employes</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">CRUD Employes With Jquery</h1>
	<div class="row">
		<div class="col-lg-12">
			<button class="btn btn-primary" id="add"><span class="glyphicon glyphicon-plus"></span> Add Employe</button>
			<a href="<?php echo base_url(); ?>user/logout" class="btn btn-danger">Logout</a>
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Full Name</th>
						<th>ID Card</th>
						<th>Divisi</th>
						<th>Address</th>
						<th style="width: 135px">Action</th>
					</tr>
				</thead>
				<tbody id="tbody">
				</tbody>
			</table>
		</div>
	</div>
	<?php echo $modal; ?>

<script type="text/javascript">
$(document).ready(function(){
	//create a global variable for our base url
	var url = '<?php echo base_url(); ?>';

	//fetch table data
	showTable();

	//show add modal
	$('#add').click(function(){
		$('#addnew').modal('show');
		$('#addForm')[0].reset();
	});

	//submit add form
	$('#addForm').submit(function(e){
		e.preventDefault();
		var employe = $('#addForm').serialize();
			$.ajax({
				type: 'POST',
				url: url + 'employe/insert',
				data: employe,
				success:function(){
					$('#addnew').modal('hide');
					showTable();
				}
			});
	});

	//show edit modal
	$(document).on('click', '.edit', function(){
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: url + 'employe/getemployes',
			dataType: 'json',
			data: {id: id},
			success:function(response){
				console.log(response);
				$('#username').val(response.username);
				$('#full_name').val(response.full_name);
				$('#id_card').val(response.id_card);
				$('#division').val(response.division);
				$('#address').val(response.address);
				$('#employeid').val(response.id);
				$('#editmodal').modal('show');
			}
		});
	});

	//update selected employe
	$('#editForm').submit(function(e){
		e.preventDefault();
		var employe = $('#editForm').serialize();
		$.ajax({
			type: 'POST',
			url: url + 'employe/update',
			data: employe,
			success:function(){
				$('#editmodal').modal('hide');
				showTable();
			}
		});
	});

	//show delete modal
	$(document).on('click', '.delete', function(){
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: url + 'employe/getemployes',
			dataType: 'json',
			data: {id: id},
			success:function(response){
				console.log(response);
				$('#delfull_name').html(response.full_name);
				$('#delid').val(response.id);
				$('#delmodal').modal('show');
			}
		});
	});

	$('#delid').click(function(){
		var id = $(this).val();
		$.ajax({
			type: 'POST',
			url: url + 'employe/delete',
			data: {id: id},
			success:function(){
				$('#delmodal').modal('hide');
				showTable();
			}
		});
	});

});

function showTable(){
	var url = '<?php echo base_url(); ?>';
	$.ajax({
		type: 'POST',
		url: url + 'employe/show',
		success:function(response){
			$('#tbody').html(response);
		}
	});
}
</script>
</div>
</body>
</html>