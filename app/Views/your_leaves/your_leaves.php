<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container mt-5">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
    <div class="input-group md-form form-sm form-2 pl-0">
  			<input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search" id="search">
  				<div class="input-group-append">
    				<span class="input-group-text red lighten-3" id="basic-text1">
						<i class="material-icons text-success" data-toggle="tooltip" title="Search!" data-placement="left">search</i>
					</span>
  				</div>
			</div>
      <br>
      <div class="text-right">
        <a href="" class="btn btn-info btn-sm text-white font-weight-bolder" data-toggle="modal"
          data-target="#createYourLeave">
          <i class="material-icons float-left" data-toggle="tooltip" title="Add Your Leave!"
            data-placement="left"></i>&nbsp;Request a leave
        </a>
      </div>
      <h4 class="font-weight-bolder"> Your Leave requests </h4>
      <br>
      <table class="table table-borderless table-hover">
        <tr>
          <th class="hide"> ID </th>
          <th> Start date </th>
          <th> End date </th>
          <th> Duration </th>
          <th> Type </th>
          <th> Status </th>
          <th> </th>
        </tr>
        <?php foreach($yourLeaveData as $yourLeave):?>
        <tr>
          <td class="hide"> <?= $yourLeave['l_id'] ?> </td>
          <td><?= $yourLeave['startDate']?></td>
          <td><?= $yourLeave['endDate']?></td>
          <td><?= $yourLeave['duration']?></td>
          <td><?= $yourLeave['leave_type']?></td>
          <td> <span class="badge badge-info"> Requested </span> </td>
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

<!-- ========================================START Model DELETE================================================ -->

<!-- The Modal -->
<?php foreach($yourLeaveData as $yourLeave):?>
<div class="modal fade" id="deleteYourLeave<?= $yourLeave['l_id'] ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title font-weight-bolder"> Remove items? </h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-right">
        <form action="<?= base_url('/your_leave/deleteLeave/'.$yourLeave['l_id']) ?>" method="post">
          <div class="form-group">
            <p style="display:flex;justify-content:flex-start"> Are you sure you want to remove the selected your leave?
            </p>
          </div>
          <a data-dismiss="modal" class="closeModal">DON'T REMOVE</a>
          &nbsp;
          <input type="submit" value="REMOVE" class="createBtn text-info">
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
<!-- =================================END MODEL DELETE==================================================== -->


<!-- ========================================START Model CREATE================================================ -->
<!-- The Modal -->
</script>
<div class="modal fade" id="createYourLeave">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create a Request</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body text-right">
        <form action="<?= base_url("your_leave/createYourLeave")?>" method="post">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                <label class="control-label float-left" for="datepicker-start">Start Date:</label>
                <input type="date" id="startDate" name="startDate" onchange="cal()" etw-date=""
                  data-date-format=" DD-YY-MM" class="form-control" id="datepicker-start" name="startDate"
                  id="startDate" onchange="cal()">
              </div>
              <div class="form-group">
                <select class="form-control" name="startTime">
                  <option>select time start</option>
                  <option>Morning</option>
                  <option>Afternoon</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                <label class="control-label float-left" for="datepicker-start">End Date:</label>
                <input type="date" id="endDate" name="endDate" onchange="cal()" etw-date=""
                  data-date-format=" DD-YY-MM" class="form-control" id="datepicker-start" name="endDate"
                  id="endDate" onchange="cal()">
              </div>
              <div class="form-group">
                <select class="form-control" name="endTime">
                  <option>select end time</option>
                  <option>Morning</option>
                  <option>Afternoon</option>
                </select>`
              </div>
            </div>
          </div>
          <!-- input duration -->
          <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="Duration" name="duration">
                </div>
              </div>
          </div>
          <!-- select leave type -->
          <div class="form-group">
            <select class="form-control" id="leave_type" name="leave_type">
              <option disabled>select leave type...</option>
              <option>Paid leave</option>
              <option>Sick leave</option>
              <option>Un paid leave</option>
              <option>Wedding leave</option>
              <option>Maternity leave</option>
            </select>
          </div>
          
          <div class="form-group">
            <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Comment"></textarea>
          </div>
          <a data-dismiss="modal" class="btn closeModal">DISCARD</a>
          &nbsp;
          <button type="submit" value="SUBMIT" class="btn text-info">SUBMIT</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- =================================END MODEL CREATE==================================================== -->
<?= $this->endSection() ?>