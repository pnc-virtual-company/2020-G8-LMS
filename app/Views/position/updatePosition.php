 <!-- ========================================START Model UPDATE================================================ -->
 <?php foreach($positionData as $values) :?>
  <!-- The Modal -->
	<div class="modal fade" id="updatePosition<?= $values['p_id']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Position</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body text-right">
			<form  action="<?= base_url("/position/updatePosition") ?>" method="post">
				<div class="form-group">
					<input type="hidden" class="form-control"  name="p_id" id="p_id" value="<?= $values['p_id']?>">
				</div>
				<div class="form-group">
					<input type="text" name="pname" class="form-control" id="pname" value="<?= $values['pname']?>">
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="UPDATE" class="createBtn text-warning">
        </div>
        </form>
      </div>
    </div> 
  </div>
  <?php endforeach; ?>
  <!-- =================================END MODEL UPDATE==================================================== -->
 