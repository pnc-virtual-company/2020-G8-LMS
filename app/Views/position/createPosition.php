<!-- =======================================START CREATE POSITION========================================== -->
<!-- The Modal -->
<div class="modal fade" id="createPosition">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Position</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body text-right">
			<form  action="<?= base_url("/position/addPosition") ?>" method="post">
				<div class="form-group">
					<input type="text" name="pname" class="form-control" placeholder="Position Name" >
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="CREATE" class="createBtn text-warning">
        </div>
        </div>
        </form>

      </div>
    </div>
  </div>
  <!-- =================================END MODEL CREATE==================================================== -->