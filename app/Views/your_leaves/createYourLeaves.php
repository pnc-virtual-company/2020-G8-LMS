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
                                            <option value="1">Morning</option>
                                            <option value="2">Afternoon</option>
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
                                            <option value="1">Morning</option>
                                            <option value="2">Afternoon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <h6 class="ml-3"><strong>Duration: </strong><input type="text" id="duration" name="duration" 
                              style="border:none;" onchange="" id="danger"> </h6>
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
                                    <input type="hidden" name = "user_id" value="<?= session()->get('u_id') ?>">
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