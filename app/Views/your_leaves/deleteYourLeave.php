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
