<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <h1>Leave Request</h1>
            <p>Dear Ronan ORGO,</p>
            <p>The time off you requested has been approved</p>
            <div class="container">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>From</th>
                                    <th>06/19/2020</th>
                                   
                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>To</td>
                                    <td>06/16/2020</td>
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    <td>Sick leave for staff</td>
                                </tr>
                                <tr>
                                    <td>Reason</td>
                                    <td>sick</td>
                                </tr>
                                <tr>
                                    <td>Last comment</td>
                                    <td></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<?= $this->endSection() ?>

 