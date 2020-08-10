<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<?= $this->include('your_leaves/createYourLeaves') ?>
<?= $this->include('your_leaves/deleteYourLeave') ?>
<div class="container mt-5">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
    <!-- search infomation -->
    <div class="input-group md-form form-sm form-2 pl-0">
  			<input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search" id="search">
			</div>
      <br>
      <!-- create leave request -->
      <div class="text-right">
        <a href="" class="btn btn-info btn-sm text-white font-weight-bolder" data-toggle="modal"
          data-target="#createYourLeave">
          <i class="material-icons float-left" data-toggle="tooltip" title="Add Your Leave!"
            data-placement="left"></i>&nbsp;Request a leave
        </a>
      </div>
      <h4 class="font-weight-bolder"> Your Leave requests </h4>
      <br>
      <table class="table table-borderless table-hover" id="myTable">
        <tr>
          <th class="hide"> Id </th>
          <th> Start date </th>
          <th> End date </th>
          <th> Duration </th>
          <th> Type </th>
          <th> Status </th>
          <th> </th>
        </tr>
        <!--Get all infomation from database and display -->
        <?php foreach($yourLeaveData as $yourLeave):?>
        <tr class="hover_your_leave" >
          <td class="hide"> <?= $yourLeave['l_id']?> </td>
          <td><?= $yourLeave['startDate']?></td>
          <td><?= $yourLeave['endDate']?></td>
          <td><?= $yourLeave['duration']?></td>
          <td><?= $yourLeave['leave_type']?></td>
          <td> <span class="badge badge-info">Requested </span> </td>
          <!-- <td><?= $yourLeave['exactime_start']?></td>
          <td><?= $yourLeave['exactime_end']?></td> -->
          <td style="display:flex;justify-content:flex-end">
            <a href="" data-toggle="modal" data-target="#deleteYourLeave<?= $yourLeave['l_id'] ?>"><i class="material-icons text-danger"
                data-toggle="tooltip" title="Delete Your Leave!" data-placement="right">delete</i></a>
          </td>
        </tr>
        <?php endforeach;?>
      </table>
    </div>
    <div class="col-2"></div>
  </div>
</div>
<?= $this->endSection() ?>


