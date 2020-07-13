<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
        <div class="input-group mb-3">
        <input type="text" id="search" class="form-control" placeholder="Search">
        <div class="input-group-append">
        </div>
    </div>
    <br>
        <h4>Leave request submitted to me</h4>
        <br>
        <table id="request" class="table table-borderless" style="width:114%">
            <thead>
                <tr>
                    <th>Employee</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Duration</th> 
                    <th>Type</th>
                    <th class="hide">Action</th>
                </tr>
                <tr>
                    <td>Hugo Pana</td>
                    <td>25/05/2005</td>
                    <td>25/05/2005</td>
                    <td>1 day</td>
                    <td>Vacation</td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm">Accept</a> 
                        <a href="#" class="btn btn-outline-secondary btn-sm">Reject</a>
                    </td>
                </tr>
                <tr>
                    <td>Hugo Pana</td>
                    <td>25/05/2005</td>
                    <td>25/05/2005</td>
                    <td>2 day</td>
                    <td>Training</td>
                    <td>
                        <h6>Rejected</h6>
                    </td>
                </tr>
                <tr>
                    <td>Hugo Pana</td>
                    <td>25/05/2005</td>
                    <td>25/05/2005</td>
                    <td>0.5 day</td>
                    <td>Vacation</td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm">Accept</a> 
                        <a href="#" class="btn btn-outline-secondary btn-sm">Reject</a>
                    </td>
                </tr>
                <tr>
                    <td>Hugo Pana</td>
                    <td>25/05/2005</td>
                    <td>25/05/2005</td>
                    <td>1 day</td>
                    <td>Vacation</td>
                    <td>
                        <h6>Accepted</h6>
                    </td>
                </tr>
            </thead>
            </table>
                
            </div>
        </div>
    </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>