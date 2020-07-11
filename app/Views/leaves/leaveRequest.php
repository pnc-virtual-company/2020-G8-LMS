<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container mt-4">
    <div class="input-group mb-3">
        <input type="text" id="search" class="form-control" placeholder="Search">
        <div class="input-group-append">
        </div>
    </div>

        <table id="request" class="table table-borderless" style="width:100%">
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
                    <td>1Day</td>
                    <td>Vacation</td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm">Accept</a> 
                        <a href="#" class="btn btn-secondary btn-sm">Reject</a>
                    </td>
                </tr>
            </thead>
            </table>
                
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>