<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<?= $this->include('department/createDepartment') ?>
<?= $this->include('department/deleteDepartment') ?>
<?= $this->include('department/updateDepartment') ?>

<div class="container mt-5">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">

<!-- alert message error if user incorrect information-->

  <?php if(session()->get('error')): ?>
  <div class="alert alert-danger alert-dismissible fade show">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong> Error Message: </strong><?= session()->get('error')->listErrors() ?>
  </div>
  <?php endif ?>

			<h5 class="text-center"></h5>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="search" onkeyup="myFunction()" placeholder="Search">
                <div class="input-group-append"></div>
            </div>
            <br>

            <table class="table table-borderless table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>Department</th>
                        <th class="hide">Id</th>
                        <th class="text-right">
                          <a href="" class="btn btn-info btn-sm text-white font-weight-bolder " data-toggle="modal" data-target="#createDepartment">
						                <i class="material-icons float-left" data-toggle="tooltip" title="Add Department!" data-placement="left">add</i>&nbsp;Create
					                </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($departmentData as $values) :?>
                    <tr class = "edit_hover_class">
                        <td class="departmentName"> <?= $values['dname']; ?> </td>
                        <td class="hide"> <?= $values['d_id']; ?> </td>
                        <td class="text-right">
                            <a href="" data-toggle="modal" data-target="#updateDepartment<?= $values['d_id']?>"><i class="editdata material-icons text-info" data-toggle="tooltip" title="Edit Department!" data-placement="left">edit</i></a>
							              <a href="" data-toggle="modal" data-target="#deleteDepartment<?= $values['d_id']?>" title="Delete Department!" data-placement="right"><i class="material-icons text-danger" data-toggle="tooltip">delete</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
		<div class="col-3"></div>
	</div>
</div>
  <!-- =================================END MODEL DELETE==================================================== -->
<?= $this->endSection() ?>


						