<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<?= $this->include('employees/addEmployee') ?>
<?= $this->include('employees/editEmployee') ?>
<div class="container mt-5">
    <!-- button search -->
	<div class="row">
		<div class="col-11">
		<div class="search">
        <div class="input-group mb-3">
            	<input type="text" id="search"  class="form-control" placeholder="Search">
            	<div class="input-group-append"></div>	
    		</div><br>
			<h3 class="font-weight-bolder employee"> Employee </h3>
		</div>

		</div>

</div>   

<div class="col-11">
         <!--alert message success if user correctly information-->
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
					<div class="text-right">
								<a href="" class="btn btn-info btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createEmployee">
									<i class="material-icons float-left" data-toggle="tooltip" title="Add Department!" data-placement="left">add</i>&nbsp;CREATE
								</a>
					</div><br>

				<table class="table table-borderless table-hover" id='myTable'>
				<thead>
        			<tr>
						<th class="hide">ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th class="hide">Email</th> 
						<th class="hide">Password</th>
						<th class="hide">Role</th>
						<th class="hide">Profile</th>
						<th>Position</th>
						<th>Department</th>
						<th>Start Date</th>
						<th>Manager</th>
						
					</tr>
				</thead>
					<tbody >
						<?php foreach($userData as $user): ?>
						<tr class="edit_hover_class ">
							<td class="hide"><?= $user['u_id']?></td>
							<td> <?= $user['firstName'] ?> </td>
							<td> <?= $user['lastName'] ?> </td>
						    <td class="hide"><?= $user['email']?></td>
							<td class = "hide"><?= $user['password']?></td>
							<td class = "hide"><?= $user['role']?></td>
							<td class = "hide"><?= $user['profile']?></td>
							<td> <?= $user['pname'] ?> </td>
							<td> <?= $user['dname'] ?> </td>
							<td> <?= $user['startDate'] ?> </td>
							<td> <?= $user['manager'] ?> </td>
							
							<!-- <button class = "submit" class = " employeeInfo"><i class="material-icons employeeInfo text-info" data-toggle="tooltip" title="Edit Employee!" data-placement="left">edit</i></button> -->
							<td style="display:flex;justify-content:flex-end">
							
								<a href=""  data-toggle="modal" data-target="#updateEmployee<?= $user['u_id'] ?>"><i class="material-icons employeeInfo text-info" data-toggle="tooltip" title="Edit Employee!" data-placement="left">edit</i></a> 
								<a href="" data-toggle="modal" data-target="#deleteEmployee<?= $user['u_id'] ?>"><i class="material-icons text-danger" data-toggle="tooltip" title="Delete Employee!" data-placement="right">delete</i></a>
							</td>
						</tr>
					</tbody>
					<?php endforeach ?>
          			
				</table>
			</div>
			
		</div>
	</div>
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
			    <form  action="<?= base_url("remove/".$user['u_id'])?>" method="post">
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