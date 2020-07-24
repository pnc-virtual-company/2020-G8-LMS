= EM<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container mt-5">
    <!-- button search -->
    <div class="search">
        <div class="input-group mb-3">
            <input type="text" id="search" onkeyup="myFunction()" class="form-control" placeholder="Search">
            <div class="input-group-append"></div>
        </div><br>
    </div>
        
    <script>
		function myFunction() {
			var input, filter, table, tr, td, i, txtValue;
				input = document.getElementById("search");
				filter = input.value.toUpperCase();
				table = document.getElementById("myTable");
				tr = table.getElementsByTagName("tr");
				for (i = 0; i < tr.length; i++) {
					td = tr[i].getElementsByTagName("td")[0];
				if (td) {
				txtValue = td.textContent || td.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
				}
			}
		}
</script>
				<h3 class="font-weight-bolder"> Employee </h3>

					<div class="text-right">
								<a href="" class="btn btn-info btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createEmployee">
									<i class="material-icons float-left" data-toggle="tooltip" title="Add Department!" data-placement="left">add</i>&nbsp;CREATE
								</a>
					</div><br>

				<table class="table table-borderless table-hover" id='myTable'>
        			<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Position</th>
						<th>Department</th>
						<th>Start Date</th>
						<th>Status</th>
					</tr>
					<?php foreach($userData as $user): ?>
						
						<tr>
							<td> <?= $user['firstName'] ?> </td>
							<td> <?= $user['lastName'] ?> </td>
							<td> <?= $user['pname'] ?> </td>
							<td> <?= $user['dname'] ?> </td>
							<td> <?= $user['startDate'] ?> </td>
							<td style="display:flex;justify-content:flex-end">
								<a href="" data-toggle="modal" data-target="#updateEmployee<?= $user['u_id'] ?>"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Employee!" data-placement="left">edit</i></a>
								<a href="" data-toggle="modal" data-target="#deleteEmployee<?= $user['u_id'] ?>"><i class="material-icons text-danger" data-toggle="tooltip" title="Delete Employee!" data-placement="right">delete</i></a>
							</td>
						</tr>

					<?php endforeach ?>
          			
				</table>
			</div>
			
		</div>
	</div>


<!-- ========================================START Model CREATE================================================ -->
	<!-- The Modal -->
	<div class="modal fade" id="createEmployee">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title font-weight-bolder">Create Employee</h3>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-right">
			<form  action="<?= base_url("addUser") ?>" method="post">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First name" name= "firstName" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Last name" name= "lastName" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="email" name= "email" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="password" class="form-control" placeholder="password" name= "password" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<select class="form-control" name="position">
										<option value="" selected disabled>Position...</option>
										<?php foreach($positionData as $position): ?>
											<option value="<?= $position['p_id'] ?>"><?= $position['pname'] ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<select class="form-control" name="department">
										<option value="" selected disabled>Department...</option>
										<?php foreach($departmentData as $department): ?>
											<option value="<?= $department['d_id'] ?>"><?= $department['dname'] ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							
						</div>
						<!-- startDate -->
					
						<div class="form-group">
                            <label class="font-weight-bolder" for="startdate" style="margin-right:100%; ">StartDate:</label>
                                <input  type="date"
                                        name="startDate"
                                        class="form-control"
                                        placeholder="Start Date..." >
                           
                        </div>

						
						<a data-dismiss="modal" class="closeModal">DISCARD</a>
                    &nbsp;
                    <!-- input submit -->
                    <input type="submit" value="CREATE" class="btn text-info">
					</div>
        	</form>
      	</div>
	 </div>
  </div>
</div>
  <!-- =================================END MODEL CREATE==================================================== -->

  <!-- ========================================START Model UPDATE================================================ -->
  <?php foreach($userData as $user): ?>
	<!-- The Modal -->
<div class="modal fade" id="updateEmployee<?= $user['u_id'] ?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title font-weight-bolder">Update Employee</h3>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-right">
			<form  action="/update" method="post">
				<div class="container">
				<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First name" name= "firstName" required value =" <?= $user['firstName'] ?>">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Last name" name= "lastName" required value="<?= $user['lastName'] ?>">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="email" name= "email" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="password" class="form-control" placeholder="password" name= "password" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<select class="form-control" name="position">
										<option value="" selected disabled>Position...</option>
										<?php foreach($positionData as $position): ?>
											<option value="<?= $position['p_id'] ?>"><?= $position['pname'] ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<select class="form-control" name="department">
										<option value="" selected disabled>Department...</option>
										<?php foreach($departmentData as $department): ?>
											<option value="<?= $department['d_id'] ?>"><?= $department['dname'] ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							
							<div class="col-sm-6">
								<!-- startDate -->
							<div class="form-group">
								<label class="font-weight-bolder" for="startdate" style="margin-right:100%; ">StartDate:</label>
									<input  type="date"
											name="startDate"
											class="form-control"
											placeholder="Start Date..." >
							
							</div>
						</div>
						<div class="col-sm-6">
                            <!-- profile -->
                            <div class="form-group">
                                <label class="font-weight-bolder" for="startdate" style="margin-right:100%; ">Profile:</label>
                                <input type="file" class="form-control-file border">
                            </div>
                        </div>
						</div>

						 <!-- role -->
						 <div class="form-group">
                                <select class="form-control" name="position">
                                    <option selected>Role</option>
                                    <option>Manager</option>
                                    <option>Empoyee</option>
                                    <option>HR</option>
                                    <option>Admin</option>
                                </select>
                            </div>
						
					<a data-dismiss="modal" class="closeModal">DISCARD</a>
                    &nbsp;
                    <input type="submit" value="UPDATE" class="btn text-info">
				</div>
        	</form>
      	</div>
	 </div>
  </div>
</div>
<?php endforeach ?>
 <!-- ========================================END Model UPDATE================================================ -->

  <!-- ========================================START Model DELETE================================================ -->
<!-- delete employee -->
<?php foreach($userData as $user): ?>
<div class="modal fade" id="deleteEmployee<?= $user['u_id'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title font-weight-bolder"> Remove items? </h4>
            </div>
        
            <!-- Modal body -->
            <div class="modal-body text-right">
			    <form  action="remove/<?= $user['u_id']?>" method="post">
				    <div class="form-group">
					    <p  style="display:flex;justify-content:flex-start"> Are you sure you want to remove the selected Employee?</p>
				    </div>
			        <a data-dismiss="modal" class="closeModal" style="margin-left:53.8%;">DON'T REMOVE</a>
                            &nbsp;
                    <input type="submit" value="REMOVE" id="btnDelteYes" class="btn text-info">
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
  <!-- =================================END MODEL DELETE==================================================== -->
<?= $this->endSection() ?>