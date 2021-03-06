<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<?= $this->include('position/updatePosition') ?>
<?= $this->include('position/deletePosition') ?>
<?= $this->include('position/createPosition') ?>
<div class="container mt-5">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">


<!-- alert message error of validation if user incorrect information or empty-->

<?php if(session()->get('error')): ?>
<div class="alert alert-danger alert-dismissible fade show">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong> Error Message: </strong><?= session()->get('error')->listErrors() ?>
</div>
<?php endif ?>
<!-- Search each position -->

			<h5 class="text-center"></h5>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="search" onkeyup="myFunction()" placeholder="Search">
                <div class="input-group-append"></div>
            </div>
            <br>

            <!-- List all position -->

            <table class="table table-borderless table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th class="hide">Id</th>
                        <th class="text-right">
                          <a href="" class="btn btn-info btn-sm text-white font-weight-bolder " data-toggle="modal" data-target="#createPosition">
						                <i class="material-icons float-left" data-toggle="tooltip" title="Add Position!" data-placement="left">add</i>&nbsp;Create
					                </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($positionData as $values) :?>
                    <tr class = "edit_hover_class">
                        <td class="position"> <?= $values['pname']; ?> </td>
                        <td class="hide"> <?= $values['p_id']; ?> </td>
                        <td class="text-right">
                            <a href="" data-toggle="modal" data-target="#updatePosition<?= $values['p_id']?>"><i class="editdata material-icons text-info" data-toggle="tooltip" title="Edit Position!" data-placement="left">edit</i></a>
							              <a href="" data-toggle="modal" data-target="#deletePosition<?= $values['p_id']?>" title="Delete position!" data-placement="right"><i class="material-icons text-danger" data-toggle="tooltip">delete</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
		<div class="col-3"></div>
	</div>
</div>
<?= $this->endSection() ?>