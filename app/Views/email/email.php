<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>

<div class="border border-dark mt-5" id="demo">
<div class="container ">
    <div class="row">
        <div class="col-6">
        <p>From: Karuna@gmail.com</p>
        <p>To:jack.thomas@gmail.com</p>
        <p>Subject:New leave request assigned to you</p>
        </div>
        <div class="col-6">
         <a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTs61yAjqutCtaLuEtugjwIyy_G7LRd35_OrA&usqp=CAU" style="width:50px; margin-left:330px; margin-top:5px; " alt=""></a>
        </div>
    </div>
</div>
<hr>
<div class="infomation">
    Hello Jack Thomas,<br>
    Employee lina jacks has submited the following request for approval:
    <div class="container">
  <div class="jumbotron border-dark">
    <div class="container">
        <div class="row">
            <div class="col-3">
               <p>Start date</p>
               <p>End date</p>
               <p>Duration</p>
               <p>Leave Type</p>
            </div>
            <div class="col-3">
                <p>65/05/2020(morning)</p>
                <p>65/05/2020(afternoon)</p>
                <p>3 day</p>
                <p>Vacation</p>
            </div>
            <div class="col-3">
                <p>Comment</p>
                <p>Employee</p>
                <p></p><br><br>
                <p>Status</p>
            </div>
            <div class="col-3">
                <p>OFF</p>
                <p>Lina Jack</p>
                <p></p><br><br>
                <p>Request</p>
               
            </div>
        </div>
    </div>     
</div>
<p>Can you please <a href="/sendback">ACCEPT</a> OR <a href="/sendback">REJECT</a>
this leave request you can also access to <a href="/your_leave">leave request details </a>to review this request</p>
<p>Thank & regard,</p>
HR officer
</div>
</div>
</fieldset>
<?= $this->endSection() ?>

 