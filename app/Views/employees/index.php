<?= $this->extend('layouts/main') ?>
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
            td = tr[i].getElementsByTagName("td")[1];
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
    <div class="row">
        <div class="col-10">
                  <!-- alert message success if user correctly information-->
		<?php if(session()->get('success')): ?>
			<div class="alert alert-success alert-dismissible fade show" >
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?= session()->get('success') ?>
			</div>
		<?php endif ?>
			<!-- alert message success if user incorrect information-->
		<?php if(session()->get('error')): ?>
				<div class="alert alert-danger alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error Message!:   </strong><?= session()->get('error')->listErrors() ?>
				</div>
		<?php endif ?>
        </div>
    </div>
    <!-- button create Employee -->
    <div class="text-right">
         <a href="" class="btn btn-info btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createEmployee" style="margin-right:65px;">
			<i class="material-icons float-left" data-toggle="tooltip" title="Add Employee!" data-placement="left">add</i>&nbsp;CREATE
		</a>
    </div>
    	
    <!-- Text on Employee -->
     <h4 class="font-weight-bold ml-2">List  Employee</h4><br>
     <!-- table Employee -->
		<table class="table table-borderless table-hover" id="myTable">

			<tr>
                <th class = "hide">ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Department</th> 
                <th>Position</th>
                <th class="hide">Role</th>
                <th>Start date</th>
            </tr>
                    
			<?php foreach ($employees as $employee): ?>
                <tr>
                    <td class ="hide"><?= $employee['id'] ?></td>
                    <td><?= $employee['firstname'] ?></td>
                    <td><?= $employee['lastname'] ?></td>
                    <td><?= $employee['email'] ?></td>
                    <td class="hide"><?= $employee['password']?></td>
                    <td><?= $employee['de_id'] ?></td>
                    <td><?= $employee['po_id'] ?></td>
                    <td><?= $employee['start_date']?></td>
                    <td>
                    <!-- Icon delete and edit -->
                    <div class='edit_hover_class'>
                        <a href="" data-toggle="modal" data-target="#updateEmployee" class="icon-edit"><i class="material-icons text-info updateEmployee" data-toggle="tooltip" title="Edit Employee!" data-placement="left" style="margin-right: 12px;">edit</i></a>
                        <a href="" data-toggle="modal" data-target="#deleteEmployee<?= $employee['id']?>" data-toggle="tooltip" title="Delete Employee!" data-placement="right" class="delete"><i class="material-icons text-danger">delete</i></a>
                    </div>
                    </td>
                     <!-- The Modal delete -->
                <div class="modal fade" id="deleteEmployee<?= $employee['id']?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog mt-3">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <h4 class="modal-title mt-3" style="margin-left:30px;"><b>Remove Items ?</b></h4>

                        <!-- Modal body -->
                        <form action="employees/delete/<?= $employee['id']?>" method="post">
                        <div class="modal-body mt-3">
                            <p style="margin-left:50px;">Are you sure you want to Remove?</p>
                            <a data-dismiss="modal" class="closeModal" style="margin-left:53.8%;">DON'T REMOVE</a>
                            &nbsp;
                            <input type="submit" value="REMOVE" id="btnDelteYes" class="btn text-info">
                        </div>
                        </form>
                    </div>
                    <div class="col-3"></div>
                    </div>
                </div>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
     
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
                <form action="employees/add" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- input First name -->
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <input type="text" class="form-control" placeholder="First name" name="firstname">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- input Last name -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last name" name="lastname">
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <!-- input email -->
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <input type="Email" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- input password -->
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <!-- input Department -->
                            <div class="form-group">
                                <select class="form-control" name="department">
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
                                <select class="form-control" name="position">
                                    <option selected>Position</option>
                                    <option>IT Admin</option>
                                    <option>WEP Coordinator</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- profile -->
                            <div class="form-group">
                                <label class="font-weight-bolder" for="startdate" style="margin-right:100%; ">Profile:</label>
                                <input type="file" class="form-control-file border">
                            </div>
                        </div>

                        <!-- startDate -->
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label class="font-weight-bolder" for="startdate" style="margin-right:100%; ">StartDate:</label>
                                <input  type="date"
                                        name="startDate"
                                        class="form-control"
                                        placeholder="Start Date..." 
                                >
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
                <div class='edit_hover_class'>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-6 ">
                            <img src="images/k-smile.jpg" alt="Avatar" width = "45%" height = "90" class = " rounded-circle "><br>
                            <a href='#'>
                                <i class="material-icons float-left text-info" style = "margin-left:20px" data-toggle="tooltip">edit</i>
                                <i class="material-icons float-left text-danger" data-toggle="tooltip">delete</i>
                            </a>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-right">
                <form action="employees/update<?= $employee['id']?> " method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- input First name -->
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <input type="text" class="form-control" placeholder="First name" name="firstname">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- input Last name -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last name" name="lastname">
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <!-- input email -->
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <input type="Email" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- input password -->
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <!-- input Department -->
                            <div class="form-group">
                                <select class="form-control" name="department">
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
                                <select class="form-control" name="position">
                                    <option selected>Position</option>
                                    <option>IT Admin</option>
                                    <option>WEP Coordinator</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- profile -->
                            <div class="form-group">
                                <label class="font-weight-bolder" for="startdate" style="margin-right:100%; ">Profile:</label>
                                <input type="file" class="form-control-file border">
                            </div>
                        </div>

                        <!-- startDate -->
                        <div class="col-sm-6">
                        <label class="font-weight-bolder" for="startdate" style="margin-right:100%; ">StartDate:</label>
                            <div class="form-group">
                                <input  type="date"
                                        name="startDate"
                                        class="form-control"
                                        placeholder="Start Date..." 
                                        onfocus="(this.type='date')">
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
                    <?php if(isset($validation)): ?>
					<div class="alert alert-danger" role="alert">
						<?= $validation->listErrors(); ?>
					</div>
					<?php endif; ?>

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

