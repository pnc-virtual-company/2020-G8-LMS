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
                <input type="hidden" name = "user_id" value="<?= session()->get('id')?>">
              <?php foreach($yourLeaveData as $yourLeave):?>
                <tr>
                    <td>
                    <?= $yourLeave['firstName'].' '.$yourLeave['lastName']?>
                    </td>
                    <td><?= $yourLeave['startDate']?></td>
                    <td><?= $yourLeave['endDate']?></td>
                    <td><?= $yourLeave['duration']?></td>
                    <td><?= $yourLeave['leave_type']?></td>
                    <td>
                        <a href=""   class="btn btn-info btn-sm">Accept</a> 
                        <a href="" class="btn btn-outline-secondary btn-sm">Reject</a>
                    </td>
                </tr>
              <?php endforeach; ?>
            </thead>
            </table>
                
            </div>
        </div>
    </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>