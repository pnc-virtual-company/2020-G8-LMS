<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container mt-5">

    
    <!-- button search -->

    <div class="col-12">
        <div class="input-group mb-3">
            <input type="text" id="search" class="form-control" placeholder="Search">
            <div class="input-group-append"></div>
        </div><br>
    </div>

    <div class="col"></div>
    <!-- button create Employee -->
    <div class="text-right">
         <a href="" class="btn btn-info btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createEmployee" style="margin-right:50px;">
			<i class="material-icons float-left" data-toggle="tooltip" title="Add Employee!" data-placement="left">add</i>&nbsp;CREATE
		</a>
    </div>
    <!-- Text on Employee -->
     <h4 class="font-weight-bold ml-2">Employees</h4><br>
     <!-- table Employee -->
		<table class="table table-borderless table-hover">

			<tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Department</th> 
                <th>Position</th>
                <th>Manager</th>
                <th>start date</th>
               
            </tr>
            <tr>
                <td>jack</td>
                <td>Thomas</td>
                <td>Training/Education</td>
                <td>IT Admin</td>
                <td>Ronan</td>
                <td>25/05/2005</td>
                <!-- Icon edit and delete -->
				<td>
					<a href="" data-toggle="modal" data-target="#updateEmployee" class="icon-edit"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Employee!" data-placement="left" style="margin-right: 12px;">edit</i></a>
					<a href="" data-toggle="tooltip" title="Delete Employee!" data-placement="right" class="delete icon" onclick="return confirm('Are you sure you want to delete this Empoyee?');"><i class="material-icons text-danger" >delete</i></a>
				</td>
            </tr>

            <?php foreach ($employees as $employee): ?>            
			
        <tr>
                  <td><?= $employee['id'];?></td>
                  <td><?= $employee['firstname'];?></td>
                  <td><?= $employee['lastname'];?></td>
                  <td><?= $employee['start_date'];?></td>
                  
          <td>
            <a href="" data-toggle="modal" data-target="#updateEmployee" class="icon-edit"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Employee!" data-placement="left" style="margin-right: 12px;">edit</i></a>
            <a href="" data-toggle="tooltip" title="Delete Employee!" data-placement="right" class="delete icon" onclick="return confirm('Are you sure you want to delete this Empoyee?');"><i class="material-icons text-danger">delete</i></a>
          </td>
        
                     <!-- The Modal delete -->
      <div class="modal fade" id="deleteEmployee" tabindex="-1" role="dialog">
        <div class="modal-dialog mt-3">
          <div class="modal-content">
            <!-- Modal Header -->
            <h4 class="modal-title mt-3" style="margin-left:30px;"><b>Remove Items ?</b></h4>

            <!-- Modal body -->
            <form action="employee/delete/<?= $employee['id']?>" method="post">
              <div class="modal-body mt-3">
                <p style="margin-left:50px;">Are you sure you want to remove the selected department?</p>


                <a data-dismiss="modal" class="closeModal" style="margin-left:53.8%;">DON'T REMOVE</a>
                &nbsp;
                <input type="submit" value="REMOVE" id="btnDelteYes" class="btn text-warning">
              </div>
            </form>
          </div>

          <?php endforeach; ?>
          <div class="col-3"></div>
        </div>
      </div>
    </tr>
   </table>  

            
</div>

<!-- ========================================START Model CREATE================================================ -->
	<!-- The Modal -->
<div class="modal fade" id="createEmployee">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Create Employee</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        
            <!-- Modal body -->
            <div class="modal-body text-right">
                <form  action="employees" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- input first name -->
                            <div class="form-group">
                                <input type="text" name ="firstname" class="form-control" placeholder="First name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- input last name -->
                            <div class="form-group">
                                <input type="text" name="lastname" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- input email -->
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- input password -->
                            <div class="form-group">
                                <input type="text" name="Password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- input Department -->
                            <div class="form-group">
                                <select class="form-control" placeholder="Department">
                                    <option selected>Department</option>
                                    <option >Training/Education</option>
                                    <option>Exteral relation team</option>
                                    <option>Admin and finance team</option>
                                    <option>Selection team</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Position -->
                            <div class="form-group">
                                <select class="form-control" placeholder="Position">
                                    <option selected>Position</option>
                                    <option>IT Admin</option>
                                    <option>WEP Coordinator</option>
                                </select>
                            </div>
                        </div>
                    </div>
                     <!-- Manager -->
                     <div class="form-group">
                        <select class="form-control" placeholder="Manager">
                            <option selected>Manager</option>
                            <option>Ronan</option>
                            <option>Bengimen/option>
                            <option>Mona</option>
                            <option>right</option>
                        </select>
                    </div>
                    <!-- input first startdate -->
                    <div class="form-group">
                    <label class="font-weight-bolder" for="startdate" style="margin-right:100%; ">StartDate:</label>
                        <input class="form-control" type="date" data-date=""  data-date-format="DD-YY-MM"
                        name="startdate"  class="form-control" placeholder="start date" required>
                    </div>
                
                    <!-- profile -->
                    <div class="form-group">
                    <label class="font-weight-bolder" for="startdate" style="margin-right:100%; ">Profile:</label>
                       <input type="file" class="form-control-file border">
                    </div>

                    <?php if(isset($validation)) :?>
        			<div class="col-12">
         				<div class="alert alert-danger" role="alert">
            			<?= $validation->listErrors(); ?>
          				</div>
        			</div>
      			<?php endif; ?>  
                    <!-- input Discard --> 
                    <a data-dismiss="modal" class="closeModal">DISCARD</a>
                    &nbsp;
                    <!-- input submit -->
                     <input type="submit" value="CREATE" class="btn text-info">
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- =================================END MODEL CREATE==================================================== -->

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
                <form  action="/" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- input first name -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- input last name -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- input email -->
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- input password -->
                            <div class="form-group">
                                <input type="text" name="Password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- input Department -->
                            <div class="form-group">
                                <select class="form-control" placeholder="Department">
                                    <option selected>Department</option>
                                    <option>Training/Education</option>
                                    <option>Exteral relation team</option>
                                    <option>Admin and finance team</option>
                                    <option>Selection team</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Position -->
                            <div class="form-group">
                                <select class="form-control" placeholder="Position">
                                    <option selected>Position</option>
                                    <option>IT Admin</option>
                                    <option>WEP Coordinator</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                             <!-- Manager -->
                            <div class="form-group">
                                <select class="form-control" placeholder="Manager">
                                    <option selected>Manager</option>
                                    <option>Ronan</option>
                                    <option>Bengimen/option>
                                    <option>Mona</option>
                                    <option>right</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- role -->
                            <div class="form-group">
                                <select class="form-control" placeholder="Role">
                                    <option selected>Role</option>
                                    <option>Admin</option>
                                    <option>Manager</option>
                                    <option>Employee</option>
                                    <option>HR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                     <!-- input first startdate -->
                    <div class="form-group">
                    <label class="font-weight-bolder" for="startdate" style="margin-right:100%; ">StartDate:</label>
                        <input class="form-control" type="date" data-date=""  data-date-format="DD-YY-MM"
                        name="startdate"  class="form-control" placeholder="start date" required>
                    </div>

                    <!-- profile -->
                    <div class="form-group">
                    <label class="font-weight-bolder" for="startdate" style="margin-right:100%; ">Profile:</label>
                       <input type="file" class="form-control-file border">
                    </div>

                    <!-- Button update and Discard -->
                    <a data-dismiss="modal" class="closeModal">DISCARD</a>
                    &nbsp;
                    <input type="submit" value="UPDATE" class="btn text-info">
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- =================================END MODEL UPDATE==================================================== -->
<?= $this->endSection() ?>