 <!-- ========================================START Model UPDATE================================================ -->
 <?php foreach($departmentData as $values) :?>
  <!-- The Modal -->
	<div class="modal fade" id="updateDepartment<?= $values['d_id']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Department</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body text-right">
			<form  action="<?= base_url("/department/updateDepartment") ?>" method="post">
				<div class="form-group">
					<input type="hidden" class="form-control"  name="d_id" id="d_id" value="<?= $values['d_id']?>">
				</div>
				<div class="form-group">
					<input type="text" name="dname" class="form-control" id="dname" value="<?= $values['dname']?>">
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="UPDATE" class="createBtn text-info">
        </div>
        </form>
      </div>
    </div> 
  </div>
  <?php endforeach; ?>
  <!-- =================================END MODEL UPDATE==================================================== -->
  