<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>

<div class="container mt-5">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<h5 class="text-center"></h5>
            <div class="input-group mb-3">
                <input type="text" id="searchs" class="form-control" placeholder="Search">
                <div class="input-group-append"></div>
            </div>
            <br>

            <table class="table table-borderless table-hover">
                <thead>
                    <tr>
                        <th>Department</th>
                        <th class="text-right">
                            <a href="" class="btn btn-info btn-sm text-white font-weight-bolder " data-toggle="modal" data-target="#createDepartment">
						        <i class="material-icons float-left" data-toggle="tooltip" title="Add Position!" data-placement="left">add</i>&nbsp;Create
					        </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Training </td>
                        <td class="text-right">
                            <a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Departments" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Departments!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td> Education </td>
                        <td class="text-right">
                            <a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Departments" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Departments!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td> HR  </td>
                        <td class="text-right">
                            <a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Departments" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Departments!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td> IT Admin </td>
                        <td class="text-right">
                            <a href="" data-toggle="modal" data-target="#updateDepartment"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Departments" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Departments!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
		<div class="col-3"></div>
	</div>
</div>
    <!-- =======================================START CREATE DEPARTMENT========================================== -->
	<!-- The Modal -->
	<div class="modal fade" id="createDepartment">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Department</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->

        <div class="modal-body text-right">
			<form  action="department/addDepartment" method="post">
				
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

  <!-- =================================START UPDATE DEPARTMENT============================================= -->
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
                            <form  action="/department/" method="post">
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
<!-- =================================END UPDATE DEPARTMENT============================================= -->

<?= $this->endSection() ?>


						