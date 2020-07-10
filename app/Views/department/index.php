<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>

<div class="container mt-5">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
			<h5 class="text-center"></h5>
				<div class="text-right">
					<a href="" class="btn btn-warning btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createPizza">
						<i class="material-icons float-left" data-toggle="tooltip" title="Add Pizza!" data-placement="left">add</i>&nbsp;Create
					</a>
				</div>
				<hr>
				<table class="table table-borderless table-hover">
					<tr>
						<th>Department</th>
					</tr>
					<!-- get data from tabe pizza -->
					<tr>
						<td>Training and education team</td>
						<td>
							<a href="" data-toggle="modal" data-target="#updatePosition"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Position" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Position!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
                    <tr>
                        <td>External relation team</td>
						<td>
							<a href="" data-toggle="modal" data-target="#updatePosition"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Position" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Position!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
                    <tr>
                        <td>Admin and finance team</td>
						<td>
							<a href="" data-toggle="modal" data-target="#updatePosition"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Position" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Position!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
				
				</table>
			</div>
			<div class="col-2"></div>
		</div>
	</div>

    <!-- ////////////////////////////////////////////////////////////// -->
    <!-- The Modal Update Position-->
    <div class="modal fade" id="updatePosition">
    <div class="modal-dialog">
        <div class="modal-content">         
            <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Update Department</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                    <!-- Modal body -->
                        <div class="modal-body text-right">
                            <form  action="/" method="post">
                                <div class="form-group">
                                    <label for="name">Department Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter Department name" value="" id="Department name" name="department">
                            </div>
                        <a data-dismiss="modal" class="closeModal">DISCARD</a>
                        <a data-dismiss="modal" class="updateModal">Update</a>
                        &nbsp;
                    <input type="submit" value="UPDATE" class="createBtn text-warning">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////// -->
<!-- ========================================START Model CREATE================================================ -->
	<!-- The Modal -->
	<div class="modal fade" id="createPizza">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Department</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->

        <div class="modal-body text-right">
			<form  action="/" method="post">
				
				<div class="form-group">
					<input type="text" name="department" class="form-control" placeholder="Department Name">
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="CREATE" class="createBtn text-warning">
        </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- =================================END MODEL CREATE==================================================== -->
    <?= $this->endSection() ?>
						