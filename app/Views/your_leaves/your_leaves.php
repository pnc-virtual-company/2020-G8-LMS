<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container mt-5">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
    <div class="input-group md-form form-sm form-2 pl-0">
  			<input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search" id="search">
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
      <table class="table table-borderless table-hover" id="myTable">
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
        <tr class="hover_your_leave" >
          <td class="hide"> <?= $yourLeave['l_id']?> </td>
          <td><?= $yourLeave['startDate']?></td>
          <td><?= $yourLeave['endDate']?></td>
          <td><?= $yourLeave['duration']?></td>
          <td><?= $yourLeave['leave_type']?></td>
          <td> <span class="badge badge-info"> Requested </span> </td>
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
        <form action="<?= base_url("deleteLeaveRequest/".$yourLeave['l_id']) ?>" method="post">
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

<!-- ===================================START MODAL CREATE========================================== -->

<div class="modal fade" id="createYourLeave" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Create a Request</h5>
                    </div>
                    <!-- Modal body -->
                    <div class="container mt-5">
                    <form action="<?= base_url("addYourLeave")?>" method="post">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input  type="date"
                                                id="startDate"
                                                name="startDate"
                                                class="form-control"
                                                placeholder="Start Date..." 
                                                onfocus="(this.type='date')">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="exactime_start" id="startTime" class="ml-2 form-control" onchange="dateDiff();">
                                            <option selected disabled>Select Time</option>
                                            <option>Morning</option>
                                            <option>Afternoon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input  type="date" 
                                                id="endDate" 
                                                name="endDate"
                                                class="form-control"
                                                placeholder="End Date..." 
                                                onchange="dateDiff();"
                                                onfocus="(this.type='date')">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="exactime_end" id="endTime" class="ml-2 form-control" onchange="dateDiff();">
                                            <option selected disabled>Select Time</option>
                                            <option>Morning</option>
                                            <option>Afternoon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <h6 class="ml-3"><strong>Duration: </strong><input type="text" id="duration" name="duration" 
                              style="border:none;"> </h6>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <select class="form-control" id="leave_type" name="leave_type">
                                            <option selected disabled>Leave type</option>
                                            <option>Paid leave</option>
                                            <option>Sick leave</option>
                                            <option>Un paid leave</option>
                                            <option>Wedding leave</option>
                                            <option>Maternity leave</option>
                                    </select>
                                    </div>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                      <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Comment"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                            <a data-dismiss="modal" class="btn closeModal">DISCARD</a>
                            &nbsp;
                            <button type="submit" value="SUBMIT" class="btn text-info">SUBMIT</button>

                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>       
<!-- =================================END MODEL CREATE==================================================== -->
<?= $this->endSection() ?>

