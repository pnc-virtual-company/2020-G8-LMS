<!-- ========================================START Model UPDATE================================================ -->
    	<!-- The Modal -->
        <div class="modal fade" id="updateEmployee">
    <div class="modal-dialog">
        <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Empoyee</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        
             <!-- Modal body -->
            <div class="modal-body text-right">
                <form  action="/update" method="post" enctype="multipart/form-data">
                <div class="row">
                    <!-- input First name -->
                    <div class="col-sm-6">
                        <input type="hidden" name="u_id" id="update_id">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="firstName">
                        </div>
                    </div>
                    <!-- input Last name -->
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="lastName">
                        </div>
                    </div>
                    <!-- input Email -->
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="email">
                        </div>
                    </div>
                    <!-- input password -->
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="password">
                        </div>
                    </div>
                    <!-- Department -->
                    <div class="col-sm-6">
                        <div class=" form-group">
                                <select class="form-control" name="department" id="department_id">
                                    <?php foreach ($departmentData as $department ): ?>
                                    <option value="<?= $department['d_id']?>"><?= $department['dname'] ?></option>
                                    <?php endforeach;?>
                                </select>
                        </div>
                    </div>
                    <!-- Position -->
                    <div class="col-sm-6">
                        <div class="form-group">
                                <select class="form-control" name="position" id="position_id">

                                    <?php foreach ($positionData as $position ): ?>
                                    <option value="<?= $position['p_id']?>"><?= $position['pname'] ?></option>
                                    <?php endforeach;?>
                                </select>
                        </div>          
                    </div>
                    <!-- startDate -->
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="font-weight-bolder" for="profile" style="margin-right:100%; ">StartDate:</label>
                            <input class="form-control datetimepicker"  name="startdate" type="date" value="<?= date('Y-m-d');?>"
                                id="startdate" data-date-format="DD-YY-MM" class="form-control">
                        </div>             
                    </div>
                    <!-- profile -->
                    <div class="col-sm-6">
						<div class="form-group">
						<label class="font-weight-bolder" for="profile" style="margin-right:100%; ">Profile:</label>
							<input type="file" class="form-control-file border" name="profile">
						</div>			
					</div>
                </div>  
                <!-- input role -->
                <div class="form-group">
                    <select class="form-control"  name = "role">
                        <option>Employees</option>
                        <option>HR Officer</option>
                        <option>Admin</option>
                        <option>Manager</option>
                    </select>
                </div>     
                <!-- input button discard and update -->
                    <a data-dismiss="modal" class="closeModal">DISCARD</a>
                    &nbsp;
                    <input type="submit" value="UPDATE" class="btn text-info">
                    <input type="file" class="hide" id="profile" name="profile">           
                </form>
            </div>
        </div>
    </div>
</div>
<!-- =================================END MODEL UPDATE=========================== -->
     