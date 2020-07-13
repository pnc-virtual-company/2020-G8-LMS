<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>

<div class="container mt-5">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
			<h5 class="text-center"></h5>
            <div class="col-10">
        <div class="input-group mb-3">
            <input type="text" id="searchs" class="form-control" placeholder="Search">
            <div class="input-group-append"></div>
        </div><br>
        </div>
				<table class="table table-borderless table-hover">
					<tr>
						<th>Department</th>
						<th><div class="">
					        <a href="" class="btn btn-info btn-sm text-white font-weight-bolder " data-toggle="modal" data-target="#createDepartment">
						        <i class="material-icons float-left" data-toggle="tooltip" title="Add Departments!" data-placement="left">add</i>&nbsp;Create
					        </a>
				</div></th>
					</tr>
                    <!-- add data to database -->
					<tr>
						<td>Training and education team</td>
						<td>
							<a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Departments" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Departments!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
                    <tr>
                        <td>External relation team</td>
						<td>
							<a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Departments" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Departments!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
                    <tr>
                        <td>Admin and finance team</td>
						<td>
							<a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Departments" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Departments!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
				
				</table>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
    <!-- The Modal Updates Departments-->
    <div class="modal fade" id="updateDepartment">
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
                                    <input type="text" class="form-control" placeholder="Enter Department name" value="" id="Department name" name="department">
                            </div>
                        <a data-dismiss="modal" class="closeModal">DISCARD</a>
                        &nbsp;
                    <input type="submit" value="UPDATE" class="createBtn text-warning">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- create Department -->
	<!-- The Modal -->
	<div class="modal fade" id="createDepartmen t">
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
					<input type="text" name="departments" class="form-control" placeholder="Department Name">
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
						