<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>


<div class="container mt-5">
<div class="row">
<div class="col-2"></div>
			<div class="col-10">
			<h5 class="text-center"></h5>
            <div class="col-7">
        <div class="input-group mb-3">
            <input type="text" id="searchs" class="form-control" placeholder="Search">
            <div class="input-group-append"></div>
        </div><br>
        </div>
				<table class="table table-borderless table-hover">
                
					<tr>
						<th>Position</th>
						<th>	
                    <div class="create">
					<a href="" class="btn btn-info btn-sm text-white font-weight-bolder " data-toggle="modal" data-target="#createPosition">
						<i class="material-icons float-left" data-toggle="tooltip" title="Add Position!" data-placement="left">add</i>&nbsp;Create
					</a>
				    </div></th>

					</tr>
					<!-- get data from tabe  Position-->
					<tr>
						<td>IT Addmin</td>
						<td>
							<a href="" data-toggle="modal" data-target="#updatePosition"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Position" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Position!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
                    <tr>
                        <td>Manager</td>
						<td>
							<a href="" data-toggle="modal" data-target="#updatePosition"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Position" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Position!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
                    <tr>
                        <td>HR Officer</td>
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
    <!-- The Modal Update Position-->
    <div class="modal fade" id="updatePosition">
    <div class="modal-dialog">
        <div class="modal-content">         
            <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Update Position</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                    <!-- Modal body -->
                        <div class="modal-body text-right">
                            <form  action="/" method="post">
                                <div class="form-group">
                                    <label for="name">Position Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter Position name" value="" id="position name" name="position">
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
	<!-- The Modal --->
	<div class="modal fade" id="createPosition">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Position</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->

        <div class="modal-body text-right">
			<form  action="/" method="post">
				
				<div class="form-group">
					<input type="text" name="position" class="form-control" placeholder="Position Name">
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
						