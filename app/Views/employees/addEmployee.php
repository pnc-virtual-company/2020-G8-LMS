<!-- =============================================START Model CREATE================================================ -->
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
			<form  action="<?= base_url("/addUser") ?>" method="post" enctype="multipart/form-data">
					<div class="container">
						<div class="row">
						<!-- input First name -->
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First name" name= "firstName" required>
								</div>
							</div>
						<!-- input Last name -->	
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Last name" name= "lastName" required>
								</div>
							</div>
						<!-- input Email -->	
							<div class="col-sm-6">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="email" name= "email" required>
								</div>
							</div>
						<!-- input password -->	
							<div class="col-sm-6">
								<div class="form-group">
									<input type="password" class="form-control" placeholder="password" name= "password" required>
								</div>
							</div>
						<!-- Department -->	  
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
						<!-- Position -->	
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
							<!-- Manager -->
							<div class="col-sm-6">
								<div class="form-group">
									<select class="form-control" name="manager">
										<option value="" selected disabled>Manager...</option>
										<?php foreach($userData as $user): ?>
											<?php if($user['role'] == "Manager"): ?>
												<option value="<?= $user['firstName'] ?>"><?= $user['firstName'] ?></option>
											<?php endif; ?>
										<?php endforeach ?>
									</select>
								</div>
							</div>	
						<!-- startDate -->	
							<div class="col-sm-6">
								<div class="form-group">
									<label class="font-weight-bolder" for="startdate" style="margin-right:100%; ">StartDate:</label>
										<input  type="date"
												name="startDate"
												class="form-control"
												placeholder="Start Date..." >
								</div>
							</div>
						<!-- profile -->					
							<div class="col-sm-6">
								
								<div class="form-group">
								<label class="font-weight-bolder" for="profile" style="margin-right:100%; ">Profile:</label>
									<input type="file" class="form-control-file border" name="profile" id="employeeProfile">
								</div>			
							</div>

						</div>
					<!-- input role -->
						<div class="form-group">
                        <select class="form-control" name="role">
                            <option selected>Role</option>
                            <option>Manager</option>
                            <option>Employee</option>
                            <option>HR</option>
							<?php if(session('role') == 'Admin'): ?>
							<option value="Admin">Admin</option>
							<?php endif; ?>
                        </select>
                    </div>
					<!-- input discard and create -->
					<a data-dismiss="modal" class="closeModal">DISCARD</a>
                    &nbsp;
                    <input type="submit" value="CREATE" class="btn text-info">
					</div>
        	</form>
      	</div>
	 </div>
  </div>
</div>

<!-- =================================END MODEL CREATE==================================================== -->


