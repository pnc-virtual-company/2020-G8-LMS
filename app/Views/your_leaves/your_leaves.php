<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container">
<div class="input-group mb-4 mt-5">
    <input type="text" class="form-control" placeholder="Search" id="search">
  </div>
</div>
<div class="container">
<button type="button" class=" btn bg-info text-white float-right btn-sm" data-toggle="modal" data-target="#leaveRequest"
            data-whatever="">Request a Leave</button>

    <!-- ===================================START MODAL CREATE========================================== -->

       <div class="modal fade" id="leaveRequest" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Create a Request</h5>
                    </div>
                    <div class="container mt-5">
                        <form action="your_leaves/your_leaves" method="POST">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input  type="text"
                                                name="startDate"
                                                class="form-control"
                                                placeholder="Start Date..." 
                                                onfocus="(this.type='date')">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="time" id="time" class="ml-2 form-control">
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
                                        <input  type="text"
                                                name="endDate"
                                                class="form-control"
                                                placeholder="End Date..." 
                                                onfocus="(this.type='date')">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="time" id="time" class="ml-2 form-control">
                                            <option selected disabled>Select Time</option>
                                            <option>Morning</option>
                                            <option>Afternoon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="ml-3">Duration: 4</h6>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control">
                                            <option selected disabled>Leave type</option>
                                            <option class="0">leave type</option>
                                            <option value="1">Paid leave</option>
                                            <option value="2">Sick leave</option>
                                            <option value="3">Un paid leave</option>
                                            <option value="4">Wedding leave</option>
                                            <option value="5">Maternity leave</option>
                                        </select>
                                    </div>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea   name="comment"
                                                    id="comment"
                                                    cols="20"
                                                    rows="2"
                                                    name="comment"
                                                    class="form-control"
                                                    placeholder="Comment">
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn bg" data-dismiss="modal">DISCARD</button>
                                <button type="button" class="btn btn text-warning" data-dismiss="modal">SUBMIT</button>

                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>       
<div class="container mt-5">
    <h2><b> Your leave requests</b></h2>
        <table id="request" class="table table-borderless" style="width:100% ">
            <thead class="text-center">
                <tr>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Duration</th> 
                    <th>Type</th>
                    <th>Status</th>
                </tr>
       
                <tr>
                    <td>10/06/2018 </td>
                    <td>15/06/2018</td>
                    <td>1 day</td>
                    <td>Vacation</td>
                    <td><h5><span class="badge badge-info">Requested</span></h5></td>
                            <td class="form"><a href="" data-toggle="modal" data-target="#updateLeave"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Department!"  data-placement="left">edit</i></a>
                            <a href="" data-toggle="tooltip" title="Delete Leave!" data-placement="right"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to remove the selected departments?');">delete</i></a></td>
                </tr>
                <tr>
                    
                    <td>03/08/2019 </td>
                    <td>06/05/2019</td>
                    <td>3 days</td>
                    <td>Training</td>
                    <td><h5><span class="badge badge-danger">Canceled</span></h5></td>
                </tr>
                    <br>
                <tr>
                
                    <td>10/02/2020 </td>
                    <td>10/02/2020</td>
                    <td>0.5 day</td>
                    <td>Vacation</td>
                    <td><h5><span class="badge badge-danger">Rejected</span></h5></td>
                </tr>
                    <br>
                <tr>
                
                    <td>11/4/2020</td>
                    <td>13/4/2020</td>
                    <td>2 day</td>
                    <td>Vacation</td>
                    <td><h5><span class="badge badge-success">Accepted</span></h5></td>
                </tr>
    
            </thead> 
        </table>
    </div>
<!-- ========================================START Model UPDATE================================================ -->
  <!-- The Modal -->
  <div class="modal fade" id="updateLeave">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Leave</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-right">
            <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input  type="text"
                                                name="startDate"
                                                class="form-control"
                                                placeholder="Start Date..." 
                                                onfocus="(this.type='date')">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="time" id="time" class="ml-2 form-control">
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
                                        <input  type="text"
                                                name="endDate"
                                                class="form-control"
                                                placeholder="End Date..." 
                                                onfocus="(this.type='date')">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="time" id="time" class="ml-2 form-control">
                                            <option selected disabled>Select Time</option>
                                            <option>Morning</option>
                                            <option>Afternoon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="ml-3">Duration: 4</h6>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control">
                                            <option selected disabled>Leave type</option>
                                            <option class="0">leave type</option>
                                            <option value="1">Paid leave</option>
                                            <option value="2">Sick leave</option>
                                            <option value="3">Un paid leave</option>
                                            <option value="4">Wedding leave</option>
                                            <option value="5">Maternity leave</option>
                                        </select>
                                    </div>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea   name="comment"
                                                    id="comment"
                                                    cols="20"
                                                    rows="2"
                                                    name="comment"
                                                    class="form-control"
                                                    placeholder="Comment"></textarea>
                                    </div>
                                </div>
                            </div>
            </form>
      </div>
      <div class="modal-footer">
                 <button type="submit" class="btn bg" data-dismiss="modal">DISCARD</button>
                 <button type="button" class="btn btn text-warning" data-dismiss="modal">UPDATE</button>

              </div>
    </div>
  </div>
  <!-- =================================END MODEL UPDATE==================================================== -->
    <?= $this->endSection() ?>